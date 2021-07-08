import AppForm from '../app-components/Form/AppForm';

Vue.component('book-type-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Book_catigory:  '' ,
                enabled:  false ,
                
            }
        }
    }

});