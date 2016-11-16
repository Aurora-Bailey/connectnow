<template>
  <div class="top-nav">
    <!-- use router-link component for navigation. -->
    <!-- specify the link by passing the `to` prop. -->
    <!-- <router-link> will be rendered as an `<a>` tag by default -->
    <router-link v-for="link in links" v-bind:class="[link.class]" v-bind:to="link.route">Go to {{link.text}}</router-link>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'top-nav',
    data () {
      return {
        links: [
          {class: 'home', text: 'Home', route: '/'},
          {class: 'playing', text: 'Playing', route: '/playing'}
        ]
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  .top-nav
    opacity: 1
</style>
