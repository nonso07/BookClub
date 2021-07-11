import AppForm from '../app-components/Form/AppForm';

Vue.component('book-cat-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Book_Titel:  '' ,
                booK_type:  '' ,
                booK_Summry:  '' ,
                enabled:  false ,
                
            },
            //Ebooks
            mediaCollections: ['Ebooks']
        }
    }

});