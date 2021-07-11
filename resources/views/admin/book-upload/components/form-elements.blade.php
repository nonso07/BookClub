<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Book_Titel'), 'has-success': fields.Book_Titel && fields.Book_Titel.valid }">
    <label for="Book_Titel" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.book-upload.columns.Book_Titel') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Book_Titel" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Book_Titel'), 'form-control-success': fields.Book_Titel && fields.Book_Titel.valid}" id="Book_Titel" name="Book_Titel" placeholder="{{ trans('admin.book-upload.columns.Book_Titel') }}">
        <div v-if="errors.has('Book_Titel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Book_Titel') }}</div>
    </div>
</div>
{{--   book     --}}
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('book_type'), 'has-success': fields.book_type && fields.book_type.valid }">
    <label for="book_type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.book-upload.columns.book_type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.book_type" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('book_type'), 'form-control-success': fields.book_type && fields.book_type.valid}" id="book_type" name="book_type" placeholder="{{ trans('admin.book-upload.columns.book_type') }}">
        <div v-if="errors.has('book_type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('book_type') }}</div>
    </div>
</div>

{{-- book_type --}}
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('booK_Summry'), 'has-success': fields.booK_Summry && fields.booK_Summry.valid }">
    <label for="booK_Summry" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.book-upload.columns.booK_Summry') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.booK_Summry" v-validate="'required'" id="booK_Summry" name="booK_Summry"></textarea>
        </div>
        <div v-if="errors.has('booK_Summry')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('booK_Summry') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.book-upload.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\BookUpload::class)->getMediaCollection('books'),
    'label' => 'Books'
])

