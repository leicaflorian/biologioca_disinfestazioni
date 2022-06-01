import AppForm from '../app-components/Form/AppForm'

Vue.component('video-form', {
  mixins: [AppForm],
  data: function () {
    return {
      form: {
        video_link: '',
        service_id: '',
        order: '',
        title: '',
        description: '',
        thumb_default: '',
        thumb_medium: '',
        thumb_high: ''
      },
      videoInfo: null
    }
  },
  methods: {
    async onVideoLinkChange () {
      const link = this.form.video_link
      
      if (!link) {
        this.resetVideoData()
        return this.videoInfo = null
      }
      
      const videoLink = new URL(link)
      const shortLink = videoLink.host === 'youtu.be'
      const videoId = shortLink ? videoLink.pathname.replace('/', '') : videoLink.searchParams.get('v')
      
      const result = await axios.get('/admin/videos/yt/' + videoId)
      
      /**
       * @type {{title: string, description: string, thumbnails: {high: {url: string, width: number, height: number} }}}
       */
      const videoDetails = result.data
      
      if (videoDetails) {
        this.videoInfo = videoDetails
      } else {
        this.videoInfo = null
        this.resetVideoData()
      }
    },
    resetVideoData () {
      this.form.title = ''
      this.form.description = ''
      this.form.thumb_default = ''
      this.form.thumb_medium = ''
      this.form.thumb_high = ''
    }
  },
  watch: {
    videoInfo: {
      deep: true,
      handler (value) {
        this.form.title = value?.title ?? ''
        this.form.description = value?.description ?? ''
        this.form.thumb_default = value?.thumbnails?.default.url ?? ''
        this.form.thumb_medium = value?.thumbnails?.medium.url ?? ''
        this.form.thumb_high = value?.thumbnails?.high.url ?? ''
      }
    }
  },
  mounted () {
  
  }
})
