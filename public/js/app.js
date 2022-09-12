"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/FileInput.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/FileInput.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'FileInput',
  props: {
    name: String,
    label: String,
    error: String,
    accept: String
  },
  data: function data() {
    return {
      selectedFiles: []
    };
  },
  methods: {
    onImgChange: function onImgChange(event) {
      var _this = this;

      var files = event.target.files;
      this.selectedFiles = [];
      Array.apply(void 0, _toConsumableArray(files)).forEach(function (file) {
        _this.selectedFiles.push(URL.createObjectURL(file));
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Slider.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Slider.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.min.css");
/* harmony import */ var swiper_css_pagination__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css/pagination */ "./node_modules/swiper/modules/pagination/pagination.min.css");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation/navigation.min.css");
/* harmony import */ var swiper_css_lazy__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! swiper/css/lazy */ "./node_modules/swiper/modules/lazy/lazy.min.css");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

 // Import Swiper styles





/*import lightGallery from 'lightgallery'
import lgThumbnail from 'lightgallery/plugins/thumbnail'
import lgZoom from 'lightgallery/plugins/zoom'
import lgVideo from 'lightgallery/plugins/video'*/
// SwiperCore.use([Navigation, Pagination])

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'Slider',
  components: {},
  props: {
    images: [],
    videos: [],
    slidesPerView: {
      "default": 2,
      type: Number | String
    }
  },
  data: function data() {
    return {
      playingVideo: null,
      playerInitiated: false
    };
  },
  methods: {
    onSwiper: function onSwiper(swiper) {
      console.log(swiper);
    },
    onSlideChange: function onSlideChange() {
      this.playingVideo = null;
      console.log('slide change');
    },
    initPlayer: function initPlayer() {
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = 'https://www.youtube.com/iframe_api';
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      this.playerInitiated = true;
    },
    playVideo: function playVideo(video) {
      if (!this.playerInitiated) {
        this.initPlayer();
      }

      this.playingVideo = video.video_link;
    },
    formatVideoLink: function formatVideoLink(video_link) {
      var link = video_link.split('/');
      var videoId = link[link.length - 1];
      return "https://www.youtube-nocookie.com/embed/".concat(videoId, "?autoplay=1");
    }
  },
  mounted: function mounted() {
    var _this = this;

    var swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.swiper', {
      // configure Swiper to use modules
      modules: [swiper__WEBPACK_IMPORTED_MODULE_0__.Navigation, swiper__WEBPACK_IMPORTED_MODULE_0__.Pagination, swiper__WEBPACK_IMPORTED_MODULE_0__.Lazy],
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
    });
    swiper.on('slideChange', function () {
      _this.playingVideo = null;
    });
    /*lightGallery(this.$refs.slider, {
      plugins: [lgZoom, lgThumbnail, lgVideo],
      speed: 500
    })*/
  }
});

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! aos */ "./node_modules/aos/dist/aos.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(aos__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var simplebar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! simplebar */ "./node_modules/simplebar/dist/simplebar.esm.js");
/* harmony import */ var simplebar_dist_simplebar_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! simplebar/dist/simplebar.css */ "./node_modules/simplebar/dist/simplebar.css");
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

window.Vue = (__webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js")["default"]);
 // import 'lightgallery/css/lightgallery.css'
// import 'lightgallery/css/lg-zoom.css'
// import 'lightgallery/css/lg-thumbnail.css'
// import 'lightgallery/css/lg-video.css'



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('file-input', (__webpack_require__(/*! ./components/FileInput.vue */ "./resources/js/components/FileInput.vue")["default"]));
Vue.component('slider', (__webpack_require__(/*! ./components/Slider.vue */ "./resources/js/components/Slider.vue")["default"]));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
  el: '#app'
});
aos__WEBPACK_IMPORTED_MODULE_0___default().init({
  once: true,
  easing: 'ease-out',
  disable: 'phone'
});
/*setTimeout(() => {
  let magicGrid = new MagicGrid({
    container: '#gridContainer', // Required. Can be a class, id, or an HTMLElement.
    static: true, // Required for static content.
    animate: false, // Optional.
    // useMin: true,
    gutter: 5,
    center: false
  })
  
  magicGrid.listen()
  
  setTimeout(() => {
    lightGallery(document.getElementById('gridContainer'), {
      plugins: [lgZoom, lgThumbnail, lgVideo],
      speed: 500
    })
  }, 200)
  
  document.querySelector('#gridContainer .overlay').classList.add('d-none')
}, 1000)*/
// Handle go up btn

(function () {
  var btn = document.querySelector('.go-up-btn');
  window.addEventListener('scroll', function () {
    var scrollHeight = document.body.scrollHeight;
    var scrollTop = window.scrollY;
    var scrollPercentage = scrollTop * 100 / scrollHeight;
    btn.classList.toggle('go-up-btn-hidden', scrollPercentage < 15);
  });
  btn.addEventListener('click', function (e) {
    e.preventDefault();
    e.currentTarget.blur();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
})(); // Handle contact us banner


(function () {
  var banner = document.getElementById('contact-us-banner');
  var bannerSentinel = document.getElementById('contact-us-banner-sentinel');
  var btnGoUp = document.querySelector('.go-up-btn');

  if (!banner) {
    return;
  }

  var observer = new IntersectionObserver(function (_ref) {
    var _ref2 = _slicedToArray(_ref, 1),
        e = _ref2[0];

    var rootBoundary = e.rootBounds;
    var condition = e.intersectionRatio < 1 && bannerSentinel.getBoundingClientRect().bottom > rootBoundary.bottom;
    banner.classList.toggle('isSticky', condition);
    console.log(e.rootBounds, e.intersectionRatio, bannerSentinel.getBoundingClientRect().bottom);
    btnGoUp.style.bottom = condition ? '9rem' : '1rem';
  }, {
    threshold: [1]
  });
  observer.observe(bannerSentinel);
  /* window.addEventListener('scroll', function () {
     // if (!banner.classList.contains('isSticky')) {
     const padding = +getComputedStyle(banner)
       .getPropertyValue('--section-padding').replace('rem', '')
     
     console.log(padding)
     
     if (padding) {
       banner.style.setProperty('--section-padding', (padding + .1) + 'rem')
     }
     
     // }
   })*/
})(); // V card download


(function () {
  var saveContactBtn = document.getElementById('save-contact-btn');

  if (!saveContactBtn) {
    return;
  }

  window.addEventListener('DOMContentLoaded', function () {
    var vCard = "BEGIN:VCARD\nVERSION:3.0\nFN;CHARSET=UTF-8:\nN;CHARSET=UTF-8:;;;;\nNICKNAME;CHARSET=UTF-8:Disinfestatori nella prov. di Vicenza\nEMAIL;CHARSET=UTF-8;type=WORK,INTERNET:info@biologicadisinfestazioni.it\nLOGO;ENCODING=b;TYPE=PNG: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\nTEL;TYPE=WORK,VOICE:+393517238237\nORG;CHARSET=UTF-8:Biologica Disinfestazioni\nURL;type=WORK;CHARSET=UTF-8:https://biologicadisinfestazioni.it/\nX-SOCIALPROFILE;TYPE=facebook:https://www.facebook.com/biologicadisinfestazioni\nX-SOCIALPROFILE;TYPE=youtube:https://www.youtube.com/channel/UCKT3azjz_wsuc69Xi-9FTXw\nREV:2022-07-27T23:35:03.065Z\nEND:VCARD\n";
    var url = URL.createObjectURL(new Blob([vCard], {
      type: 'text/vcard'
    }));
    saveContactBtn.href = url;
    saveContactBtn.download = 'Contatto Biologica Disinfestazioni';
  });
})();

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/bootstrap.scss":
/*!***************************************!*\
  !*** ./resources/sass/bootstrap.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/icons.scss":
/*!***********************************!*\
  !*** ./resources/sass/icons.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/js/components/FileInput.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/FileInput.vue ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _FileInput_vue_vue_type_template_id_6c71a2d3_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true& */ "./resources/js/components/FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true&");
/* harmony import */ var _FileInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./FileInput.vue?vue&type=script&lang=js& */ "./resources/js/components/FileInput.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _FileInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _FileInput_vue_vue_type_template_id_6c71a2d3_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _FileInput_vue_vue_type_template_id_6c71a2d3_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "6c71a2d3",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/FileInput.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Slider.vue":
/*!********************************************!*\
  !*** ./resources/js/components/Slider.vue ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Slider_vue_vue_type_template_id_872262e8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Slider.vue?vue&type=template&id=872262e8&scoped=true& */ "./resources/js/components/Slider.vue?vue&type=template&id=872262e8&scoped=true&");
/* harmony import */ var _Slider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Slider.vue?vue&type=script&lang=js& */ "./resources/js/components/Slider.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Slider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Slider_vue_vue_type_template_id_872262e8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _Slider_vue_vue_type_template_id_872262e8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "872262e8",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Slider.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/FileInput.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/FileInput.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FileInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FileInput.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/FileInput.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FileInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Slider.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/components/Slider.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Slider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Slider.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Slider.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Slider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FileInput_vue_vue_type_template_id_6c71a2d3_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FileInput_vue_vue_type_template_id_6c71a2d3_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FileInput_vue_vue_type_template_id_6c71a2d3_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true&");


/***/ }),

/***/ "./resources/js/components/Slider.vue?vue&type=template&id=872262e8&scoped=true&":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/Slider.vue?vue&type=template&id=872262e8&scoped=true& ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Slider_vue_vue_type_template_id_872262e8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Slider_vue_vue_type_template_id_872262e8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Slider_vue_vue_type_template_id_872262e8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Slider.vue?vue&type=template&id=872262e8&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Slider.vue?vue&type=template&id=872262e8&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/FileInput.vue?vue&type=template&id=6c71a2d3&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "mb-3" },
    [
      _c(
        "label",
        { staticClass: "form-label", attrs: { for: _vm.name + "FileInput" } },
        [_vm._v("\n    " + _vm._s(_vm.label) + "\n  ")]
      ),
      _vm._v(" "),
      _c("input", {
        staticClass: "form-control",
        class: { "is-invalid": _vm.error },
        attrs: {
          type: "file",
          accept: _vm.accept,
          id: _vm.name + "FileInput",
          name: _vm.name,
        },
        on: { change: _vm.onImgChange },
      }),
      _vm._v(" "),
      _vm.error
        ? [
            _c(
              "span",
              { staticClass: "invalid-feedback", attrs: { role: "alert" } },
              [_c("strong", [_vm._v(_vm._s(_vm.error))])]
            ),
          ]
        : _vm._e(),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "d-flex" },
        _vm._l(_vm.selectedFiles, function (img) {
          return _c("img", {
            key: img,
            staticClass: "img-thumbnail",
            staticStyle: { width: "100px" },
            attrs: { src: _vm.selectedFiles },
          })
        }),
        0
      ),
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Slider.vue?vue&type=template&id=872262e8&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Slider.vue?vue&type=template&id=872262e8&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { ref: "slider", staticClass: "slider-container" }, [
    _c("div", { staticClass: "swiper swiper-container" }, [
      _c(
        "div",
        { staticClass: "swiper-wrapper" },
        [
          _vm._l(_vm.videos, function (video) {
            return _c(
              "div",
              { key: video.id, staticClass: "yt-video swiper-slide" },
              [
                _vm.playingVideo !== video.video_link
                  ? _c(
                      "a",
                      {
                        staticClass: "link_play",
                        attrs: { href: "#" },
                        on: {
                          click: function ($event) {
                            $event.preventDefault()
                            $event.stopPropagation()
                            return _vm.playVideo(video)
                          },
                        },
                      },
                      [
                        _c("img", {
                          staticClass: "swiper-lazy",
                          attrs: {
                            "data-src": video.thumb_high,
                            alt: video.title,
                          },
                        }),
                        _vm._v(" "),
                        _c("div", { staticClass: "swiper-lazy-preloader" }),
                        _vm._v(" "),
                        _c("div", { staticClass: "caption" }, [
                          _vm._v(
                            "\n            " +
                              _vm._s(video.title) +
                              "\n          "
                          ),
                        ]),
                      ]
                    )
                  : _c("iframe", {
                      attrs: {
                        width: "560",
                        height: "315",
                        src: _vm.formatVideoLink(video.video_link),
                        title: "YouTube video player",
                        frameborder: "0",
                        allow:
                          "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",
                        allowfullscreen: "",
                        autoplay: "",
                      },
                    }),
              ]
            )
          }),
          _vm._v(" "),
          _vm._l(_vm.images, function (img) {
            return _c("div", { key: img.id, staticClass: "swiper-slide" }, [
              _c("img", {
                staticClass: "swiper-lazy",
                attrs: {
                  "data-src": img.full_hd_url,
                  alt: img.alt_text || img.file_name,
                  loading: "lazy",
                },
              }),
              _vm._v(" "),
              _c("div", { staticClass: "swiper-lazy-preloader" }),
              _vm._v(" "),
              img.caption
                ? _c("div", { staticClass: "caption" }, [
                    _vm._v("\n          " + _vm._s(img.caption) + "\n        "),
                  ])
                : _vm._e(),
            ])
          }),
          _vm._v("\n      ...\n    "),
        ],
        2
      ),
      _vm._v(" "),
      _c("div", { staticClass: "swiper-pagination" }),
      _vm._v(" "),
      _c("div", { staticClass: "swiper-button-prev" }),
      _vm._v(" "),
      _c("div", { staticClass: "swiper-button-next" }),
    ]),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","css/vendors-2","css/vendors-1","js/vendors-1","js/vendors-2","js/vendors-3"], () => (__webpack_exec__("./resources/js/app.js"), __webpack_exec__("./resources/sass/app.scss"), __webpack_exec__("./resources/sass/bootstrap.scss"), __webpack_exec__("./resources/sass/icons.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);