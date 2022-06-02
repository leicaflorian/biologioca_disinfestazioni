/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue').default

import AOS from 'aos'
import 'simplebar'
import 'simplebar/dist/simplebar.css'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('file-input', require('./components/FileInput.vue').default)
Vue.component('slider', require('./components/Slider.vue').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  el: '#app'
})

AOS.init({
  once: true,
  easing: 'ease-out'
})

// Handle go up btn
function addGoTopButton () {
  const btn = document.querySelector('.go-up-btn')
  
  window.addEventListener('scroll', () => {
    const scrollHeight = document.body.scrollHeight
    const scrollTop = window.scrollY
    const scrollPercentage = scrollTop * 100 / scrollHeight
    
    btn.classList.toggle('go-up-btn-hidden', scrollPercentage < 15)
  })
  
}

addGoTopButton()
