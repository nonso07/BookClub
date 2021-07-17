<div class="form-group row align-items-center" :class="{'has-danger': errors.has('First'), 'has-success': fields.First && fields.First.valid }">
    <label for="First" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.student.columns.First') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.First" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('First'), 'form-control-success': fields.First && fields.First.valid}" id="First" name="First" placeholder="{{ trans('admin.student.columns.First') }}">
        <div v-if="errors.has('First')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('First') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Reg_num'), 'has-success': fields.Reg_num && fields.Reg_num.valid }">
    <label for="Reg_num" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.student.columns.Reg_num') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Reg_num" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Reg_num'), 'form-control-success': fields.Reg_num && fields.Reg_num.valid}" id="Reg_num" name="Reg_num" placeholder="{{ trans('admin.student.columns.Reg_num') }}">
        <div v-if="errors.has('Reg_num')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Reg_num') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.student.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


