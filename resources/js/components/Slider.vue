<template>
  <div class="slider-container" ref="slider">
    <div class="swiper swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div v-for="video of videos" class="yt-video swiper-slide"
             :key="video.id" :data-order="video.order">
          <a href="#" @click.prevent.stop="playVideo(video)"
             class="link_play"
             v-if="playingVideo !== video.video_link">
            <img :data-src="video.thumb_high" :alt="video.title" class="swiper-lazy">
            <div class="swiper-lazy-preloader"></div>
            <div class="caption">
              {{ video.title }}
            </div>
          </a>

          <iframe width="560" height="315" v-else
                  :src="formatVideoLink(video.video_link)"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen autoplay></iframe>
        </div>

        <div class="swiper-slide" v-for="img of images" :key="img.id"
             :data-order="img.order">
          <img :data-src="img.full_hd_url" :alt="img.alt_text || img.file_name"
               loading="lazy" class="swiper-lazy">
          <div class="swiper-lazy-preloader"></div>
          <div class="caption" v-if="img.caption">
            {{ img.caption }}
          </div>
        </div>
        ...
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!--      <div class="swiper-scrollbar"></div>-->
    </div>
  </div>
</template>

<script>
import { Pagination, Navigation, Lazy } from 'swiper'
import Swiper from 'swiper'

// Import Swiper styles
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/navigation'
import 'swiper/css/lazy'

/*import lightGallery from 'lightgallery'
import lgThumbnail from 'lightgallery/plugins/thumbnail'
import lgZoom from 'lightgallery/plugins/zoom'
import lgVideo from 'lightgallery/plugins/video'*/
// SwiperCore.use([Navigation, Pagination])

export default {
  name: 'Slider',
  components: {},
  props: {
    images: [],
    videos: [],
    slidesPerView: {
      default: 2,
      type: Number | String
    }
  },
  data () {
    return {
      playingVideo: null,
      playerInitiated: false
    }
  },
  methods: {
    onSwiper (swiper) {
      console.log(swiper)
    },
    onSlideChange () {
      this.playingVideo = null
      console.log('slide change')
    },
    initPlayer () {
      // 2. This code loads the IFrame Player API code asynchronously.
      const tag = document.createElement('script')

      tag.src = 'https://www.youtube.com/iframe_api'

      const firstScriptTag = document.getElementsByTagName('script')[0]
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)

      this.playerInitiated = true
    },
    playVideo (video) {

      if (!this.playerInitiated) {
        this.initPlayer()
      }

      this.playingVideo = video.video_link
    },
    formatVideoLink (video_link) {
      const link = video_link.split('/')
      const videoId = link[link.length - 1]

      return `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1`
    }
  },
  mounted () {
    const swiper = new Swiper('.swiper', {
      // configure Swiper to use modules
      modules: [Navigation, Pagination, Lazy],
      loop: true,
      preloadImages: false,
      lazy: {
        loadPrevNext: true
      },

      // If we need pagination
      pagination: {
        el: '.swiper-pagination'
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    })

    swiper.on('slideChange', () => {
      this.playingVideo = null
    })

    /*lightGallery(this.$refs.slider, {
      plugins: [lgZoom, lgThumbnail, lgVideo],
      speed: 500
    })*/
  }
}
</script>

<style scoped>

</style>
