let Data = {
  version: {
    compatible: 'GSE4H65',
    micro: 'v001'
  },
  server: {
    // localhost || www.example.com
    host: window.location.hostname,

    // http: || https:
    protocol: window.location.protocol,

    // http://localhost || http://www.example.com
    origin: window.location.origin,

    // /xyz || / || /asdf/werwer
    path: window.location.pathname,

    // /static/api/ || /api/
    api: window.location.origin + (window.location.hostname === 'localhost' ? '/static/api/' : '/api/'),

    // .txt || .php || ''
    apiext: (window.location.hostname === 'localhost' ? '.txt' : '.php')
  },
  user: {
    name: ''
  }
}

export default Data
