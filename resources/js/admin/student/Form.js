import AppForm from '../app-components/Form/AppForm';

Vue.component('student-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                First:  '' ,
                Reg_num:  '' ,
                enabled:  false ,
                
            }
        }
    }

});