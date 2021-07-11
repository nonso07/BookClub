import AppForm from '../app-components/Form/AppForm';

Vue.component('comment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_name:  '' ,
                user_id:  '' ,
                user_comments:  '' ,
                enabled:  false ,
                
            }
        }
    }

});