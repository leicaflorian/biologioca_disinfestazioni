import AppForm from '../app-components/Form/AppForm'
import { methods } from './Media'

Vue.component('medium-form', {
  mixins: [AppForm],
  data: function () {
    return {
      form: {
        model_type: '',
        model_id: '',
        uuid: '',
        collection_name: '',
        name: '',
        file_name: '',
        mime_type: '',
        disk: '',
        conversions_disk: '',
        size: '',
        manipulations: '',
        custom_properties: '',
        generated_conversions: '',
        responsive_images: '',
        order_column: '',
        order: '',
        alt_text: '',
        caption: ''
        
      }
    }
  },
  methods: {
    ...methods
  }
  
})
