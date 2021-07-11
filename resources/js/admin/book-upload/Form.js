import AppForm from '../app-components/Form/AppForm';

Vue.component('book-upload-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Book_Titel:  '' ,
                booK_Summry:  '' ,
                book_type:    '' ,
                enabled:  false ,
                /*
                Book_Titel:  this.getLocalizedFormDefaults(),
                booK_Summry:  this.getLocalizedFormDefaults(),
                enabled:  false
                */

            },
            mediaCollections: ['books']
        }
    }

});