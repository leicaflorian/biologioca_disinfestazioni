<template>
  <div class="slider-container">
    <div class="swiper swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div v-for="video of videos" class="yt-video swiper-slide"
             :key="video.id">
          <a href="#" @click.prevent.stop="playVideo(video)"
             class="link_play"
             v-if="playingVideo !== video.video_link">
            <img :src="video.thumb_high" :alt="video.title" class="">
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

        <div class="swiper-slide" v-for="img of images" :key="img.id">
          <img :src="`/media/${img.id}/conversions/${img.name}-full-hd.jpg`" :alt="img.alt_text" class=""
               loading="lazy">
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
    <!--
        <swiper :slides-per-view="slidesPerView"
                :loop="true"
                :navigation="true"
                :centeredSlides="true"
                :spaceBetween="30"
                :grabCursor="true"
                :pagination="true"
                @swiper="onSwiper"
                @slideChange="onSlideChange">


        </swiper>-->
  </div>
</template>

<script>
// Import Swiper Vue.js components
// import { SwiperCore, Swiper, SwiperSlide } from 'swiper-vue2'
import { Pagination, Navigation } from 'swiper'
import Swiper from 'swiper'

// Import Swiper styles
import 'swiper/css'
import 'swiper/css/pagination'
import 'swiper/css/navigation'

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
      modules: [Navigation, Pagination],
      loop: true,

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
  }
}
</script>

<style scoped>

</style>
