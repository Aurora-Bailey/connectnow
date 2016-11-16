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
  { path: '/home', component: Home },
  { path: '/playing', component: Playing }
]
const router = new VueRouter({
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
