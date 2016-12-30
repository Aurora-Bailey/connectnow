let JsonApi = {}

JsonApi.install = function (Vue, options) {
  Vue.prototype.$apiget = function (page, query, callback) {
    // Set API Address
    let apiurl = this.$root.$data.server.api + // http://localhost/static/api/
      page + // page
      this.$root.$data.server.apiext + // .txt
      (query.length > 0 ? '?' + query.join('&') : '') // /query
    console.log(apiurl)

    // Request Data
    this.$http.get(apiurl)
      .then((response) => { return response.json() }, (response) => { return new Promise(function (resolve, reject) { resolve({error: ['Error with request.', response.body]}) }) })
      .then((json) => { return new Promise(function (resolve, reject) { resolve(json) }) }, (response) => { return new Promise(function (resolve, reject) { resolve({error: ['Error with json.', response]}) }) })
      .then((data) => {
        callback(data)
      })
  }

  Vue.prototype.$apipost = function (page, data, callback) {
    // Set API Address
    let apiurl = this.$root.$data.server.api + // http://localhost/static/api/
      page + // page
      this.$root.$data.server.apiext // .txt
    console.log(apiurl)

    // Request Data
    // this.$http.post(apiurl, data)
    this.$http.get(apiurl)
      .then((response) => { return response.json() }, (response) => { return new Promise(function (resolve, reject) { resolve({error: ['Error with request.', response.body]}) }) })
      .then((json) => { return new Promise(function (resolve, reject) { resolve(json) }) }, (response) => { return new Promise(function (resolve, reject) { resolve({error: ['Error with json.', response]}) }) })
      .then((data) => {
        callback(data)
      })
  }
}

export default JsonApi
