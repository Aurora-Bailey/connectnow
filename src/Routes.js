// Pages
import Home from './pages/Home'
import Matches from './pages/Matches'
import Connections from './pages/Connections'
import Groups from './pages/Groups'
import Profile from './pages/Profile'
import NotFound from './pages/NotFound'

// Popups
import Popup from './popups/Popup'

// Router
export default [
  { name: 'home', path: '/', component: Home },
  { name: 'matches', path: '/matches', component: Matches },
  { name: 'matches_popup', path: '/matches/:type/:id', components: { default: Matches, popup: Popup } },

  { name: 'connections', path: '/connections', component: Connections },
  { name: 'groups', path: '/groups', component: Groups },
  { name: 'profile', path: '/profile', component: Profile },
  { name: '404', path: '*', component: NotFound }
]
