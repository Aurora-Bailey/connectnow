// Pages
import Home from './pages/Home'
import Search from './pages/Search'
import Matches from './pages/Matches'
import Connections from './pages/Connections'
import Groups from './pages/Groups'
import Profile from './pages/Profile'
import Logout from './pages/Logout'
import NotFound from './pages/NotFound'

// Router
export default [
  { path: '/', component: Home },
  { path: '/search', component: Search },
  { path: '/matches', component: Matches },
  { path: '/connections', component: Connections },
  { path: '/groups', component: Groups },
  { path: '/profile', component: Profile },
  { path: '/logout', component: Logout },
  { path: '*', component: NotFound }
]
