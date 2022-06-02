import AppForm from '../app-components/Form/AppForm';

Vue.component('contact-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                email:  '' ,
                service_id:  '' ,
                phone:  '' ,
                message:  '' ,
                
            }
        }
    }

});