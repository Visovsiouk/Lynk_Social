require('./bootstrap')

window.Vue = require('vue')

Vue.component('post-form', require('./components/PostForm.vue').default)

const app = new Vue({
  el: '#app',

  mounted () {
    console.log('Vue loaded')
  }
})
