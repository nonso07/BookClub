import AppForm from '../app-components/Form/AppForm';

Vue.component('receipt-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                first_name:  '' ,
                last_name:  '' ,
                Department:  '' ,
                Reg_no:  '' ,
                phoneNum:  '' ,
                trans_id:  '' ,
                amount:  '' ,
                fees:  '' ,
                Receipt_plan:  '' ,
                enabled:  false ,
                
            }
        }
    }

});