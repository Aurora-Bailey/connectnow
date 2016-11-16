// Core
import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App'
import VueData from './modules/VueData'

// Pages
import Home from './pages/Home'
import Playing from './pages/Playing'

// Router
Vue.use(VueRouter)
const routes = [
  { path: '/', component: Home },
  { path: '/playing', component: Playing },
  { path: '*', component: Home } // 404 Page not found
]
const router = new VueRouter({
  // History mode makes links prettier, but requires dedicated hosting. (or in s3 set 404 to index.html)
  mode: 'history',
  routes // short for routes: routes
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
