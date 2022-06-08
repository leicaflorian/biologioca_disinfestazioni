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
        description_long: '',
        description_short: '',
        has_page: false,
        featured: false,
        order: '',
      },
      mediaCollections: ['gallery', 'img_cover']
    }
  }
  
})
