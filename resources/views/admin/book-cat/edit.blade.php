@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.book-cat.actions.edit', ['name' => $bookCat->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <book-cat-form
                :action="'{{ $bookCat->resource_url }}'"
                :data="{{ $bookCat->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.book-cat.actions.edit', ['name' => $bookCat->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.book-cat.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </book-cat-form>

        </div>
    
</div>

@endsection