// Pages
import Home from './pages/Home'
import Matches from './pages/Matches'
import Connections from './pages/Connections'
import Groups from './pages/Groups'
import Profile from './pages/Profile'
import NotFound from './pages/NotFound'

// Popups
import Invite from './popups/Invite'

// Parts
import TopNav from './parts/TopNav'

// Router
export default [
  { name: 'home', path: '/', components: { default: Home, nav: TopNav } },
  { name: 'matches', path: '/matches', components: { default: Matches, nav: TopNav } },
  { name: 'matches_popup', path: '/matches/:type/:id', components: { default: Matches, nav: TopNav, popup: Invite } },

  { name: 'connections', path: '/connections', components: { default: Connections, nav: TopNav } },
  { name: 'groups', path: '/groups', components: { default: Groups, nav: TopNav } },
  { name: 'profile', path: '/profile', components: { default: Profile, nav: TopNav } },
  { name: '404', path: '*', components: { default: NotFound, nav: TopNav } }
]
