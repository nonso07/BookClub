<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Book_catigory'), 'has-success': fields.Book_catigory && fields.Book_catigory.valid }">
    <label for="Book_catigory" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.book-type.columns.Book_catigory') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Book_catigory" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Book_catigory'), 'form-control-success': fields.Book_catigory && fields.Book_catigory.valid}" id="Book_catigory" name="Book_catigory" placeholder="{{ trans('admin.book-type.columns.Book_catigory') }}">
        <div v-if="errors.has('Book_catigory')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Book_catigory') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.book-type.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


