import AppForm from '../app-components/Form/AppForm';

Vue.component('service-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                slug:  '' ,
                name:  '' ,
                title:  '' ,
                description:  '' ,
                description_long:  '' ,
                description_short:  '' ,
                img_cover_alt:  '' ,
                has_page:  false ,
                featured:  false ,
                order:  '' ,
            },
            mediaCollections: ['gallery', "img_cover"]
        }
    }

});
