// Core
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './App'
import VueData from './modules/VueData'
import Routes from './Routes'

// Bootstrap
import 'jquery'
import 'tether'
import 'bootstrap'

// The Vue thing
Vue.use(VueRouter)
Vue.use(VueResource)

const router = new VueRouter({
  // History mode makes links prettier, but requires dedicated hosting. (or in s3 set 404 to index.html)
  mode: 'history',
  routes: Routes // short for routes: routes
})

// Vue Main
new Vue({
  el: '#app',
  template: '<App/>',
  components: { App },
  router,
  data () {
    return VueData // Data is now native
  }
})
