<div class="form-group row align-items-center" :class="{'has-danger': errors.has('first_name'), 'has-success': fields.first_name && fields.first_name.valid }">
    <label for="first_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.first_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.first_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('first_name'), 'form-control-success': fields.first_name && fields.first_name.valid}" id="first_name" name="first_name" placeholder="{{ trans('admin.receipt.columns.first_name') }}">
        <div v-if="errors.has('first_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('first_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('last_name'), 'has-success': fields.last_name && fields.last_name.valid }">
    <label for="last_name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.last_name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.last_name" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('last_name'), 'form-control-success': fields.last_name && fields.last_name.valid}" id="last_name" name="last_name" placeholder="{{ trans('admin.receipt.columns.last_name') }}">
        <div v-if="errors.has('last_name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('last_name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Department'), 'has-success': fields.Department && fields.Department.valid }">
    <label for="Department" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.Department') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Department" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Department'), 'form-control-success': fields.Department && fields.Department.valid}" id="Department" name="Department" placeholder="{{ trans('admin.receipt.columns.Department') }}">
        <div v-if="errors.has('Department')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Department') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Reg_no'), 'has-success': fields.Reg_no && fields.Reg_no.valid }">
    <label for="Reg_no" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.Reg_no') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Reg_no" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Reg_no'), 'form-control-success': fields.Reg_no && fields.Reg_no.valid}" id="Reg_no" name="Reg_no" placeholder="{{ trans('admin.receipt.columns.Reg_no') }}">
        <div v-if="errors.has('Reg_no')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Reg_no') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phoneNum'), 'has-success': fields.phoneNum && fields.phoneNum.valid }">
    <label for="phoneNum" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.phoneNum') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phoneNum" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phoneNum'), 'form-control-success': fields.phoneNum && fields.phoneNum.valid}" id="phoneNum" name="phoneNum" placeholder="{{ trans('admin.receipt.columns.phoneNum') }}">
        <div v-if="errors.has('phoneNum')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phoneNum') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('trans_id'), 'has-success': fields.trans_id && fields.trans_id.valid }">
    <label for="trans_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.trans_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.trans_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('trans_id'), 'form-control-success': fields.trans_id && fields.trans_id.valid}" id="trans_id" name="trans_id" placeholder="{{ trans('admin.receipt.columns.trans_id') }}">
        <div v-if="errors.has('trans_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('trans_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('amount'), 'has-success': fields.amount && fields.amount.valid }">
    <label for="amount" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.amount') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.amount" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('amount'), 'form-control-success': fields.amount && fields.amount.valid}" id="amount" name="amount" placeholder="{{ trans('admin.receipt.columns.amount') }}">
        <div v-if="errors.has('amount')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('amount') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fees'), 'has-success': fields.fees && fields.fees.valid }">
    <label for="fees" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.fees') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.fees" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fees'), 'form-control-success': fields.fees && fields.fees.valid}" id="fees" name="fees" placeholder="{{ trans('admin.receipt.columns.fees') }}">
        <div v-if="errors.has('fees')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fees') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Receipt_plan'), 'has-success': fields.Receipt_plan && fields.Receipt_plan.valid }">
    <label for="Receipt_plan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.receipt.columns.Receipt_plan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Receipt_plan" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Receipt_plan'), 'form-control-success': fields.Receipt_plan && fields.Receipt_plan.valid}" id="Receipt_plan" name="Receipt_plan" placeholder="{{ trans('admin.receipt.columns.Receipt_plan') }}">
        <div v-if="errors.has('Receipt_plan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Receipt_plan') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.receipt.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


