import AppForm from '../app-components/Form/AppForm'

Vue.component('service-form', {
  mixins: [AppForm],
  props: {
    gallery: {},
    imgCover: {}
  },
  data: function () {
    return {
      form: {
        slug: '',
        name: '',
        title: '',
        description: '',
        meta_title: '',
        meta_description: '',
        description_short: '',
        second_title: '',
        second_content: '',
        has_page: false,
        featured: false,
        order: '',
      },
      mediaCollections: ['gallery', 'img_cover']
    }
  }
  
})
