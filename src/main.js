import Vue from 'vue'
import App from './App'
import VueData from './modules/VueData'

/* eslint-disable no-new */
new Vue({
  el: '#app',
  template: '<App/>',
  components: { App },
  data () {
    return VueData // DATA objects are now native
  },
  mounted: function () {
    this.$root.page.state = 'home'
  }
})
