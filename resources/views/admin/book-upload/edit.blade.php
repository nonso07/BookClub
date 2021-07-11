@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.book-upload.actions.edit', ['name' => $bookUpload->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <book-upload-form
                :action="'{{ $bookUpload->resource_url }}'"
                :data="{{ $bookUpload->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.book-upload.actions.edit', ['name' => $bookUpload->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.book-upload.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </book-upload-form>

        </div>
    
</div>

@endsection