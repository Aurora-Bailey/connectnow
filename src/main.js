// Core
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './App'
import VueData from './modules/VueData'

// Bootstrap
import 'jquery'
import 'tether'
import 'bootstrap'

// Pages
import Home from './pages/Home'
import Search from './pages/Search'
import Matches from './pages/Matches'
import Connections from './pages/Connections'
import Groups from './pages/Groups'
import Profile from './pages/Profile'
import Logout from './pages/Logout'
import NotFound from './pages/NotFound'

// The Vue thing
Vue.use(VueRouter)
Vue.use(VueResource)

// Router
const routes = [
  { path: '/', component: Home },
  { path: '/search', component: Search },
  { path: '/matches', component: Matches },
  { path: '/connections', component: Connections },
  { path: '/groups', component: Groups },
  { path: '/profile', component: Profile },
  { path: '/logout', component: Logout },
  { path: '*', component: NotFound }
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
