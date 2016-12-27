<template>
  <div class="invite">
    <popup>
      <img :src="results.picture">
      <div>{{ results.name }}</div>
      <div>{{ results.location }}</div>
      <div>{{ results.age }}</div>
      <div>{{ results.bio }}</div>
      <div>{{ results.tags }}</div>

    </popup>
  </div>
</template>

<script>
  /* Components */
  import Popup from '../parts/Popup'

  export default {
    name: 'invite',
    components: {
      Popup
    },
    data () {
      return {
        results: {
          name: 'Name',
          age: 'Age',
          location: 'Location',
          picture: '',
          bio: 'bio',
          tags: []
        }
      }
    },
    methods: {
      loadMatches: function (e) {
        let options = []
        options.push('id=' + this.$route.params.id)

        let apiurl = this.$root.$data.server.origin + '/api/invite.php?' + options.join('&')
        console.log(apiurl)

        // request new data
        this.$http.get(apiurl).then((response) => {
          let results = response.body.results

          if (results.length === 1) {
            this.$set(this, 'results', results[0])
          }
        }, (response) => {
          // Error callback
        })
      }
    },
    mounted: function () {
      this.loadMatches()
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  .invite
    position: fixed
    bottom: 0
    right: 0
    left: 0
    top: 0

  .asdf
    opacity: 1
</style>
