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

    // Custom origin link for localhost to cut off the port number
    // http://localhost || http://www.example.com
    origin: window.location.hostname === 'localhost' ? 'http://localhost' : window.location.origin,

    // /xyz
    path: window.location.pathname
  },
  user: {
    name: ''
  }
}

export default Data
