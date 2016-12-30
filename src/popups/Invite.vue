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
        // Set Query
        let query = []
        query.push('id=' + this.$route.params.id)

        this.$apiget('invite', query, (data) => {
          // Console log any errors
          if (data.error) { console.log(data); return false }

          this.$set(this, 'results', data.results[0])
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
