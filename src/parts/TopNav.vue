<template>
  <div class="top-nav">
    <!-- use router-link component for navigation. -->
    <!-- specify the link by passing the `to` prop. -->
    <!-- <router-link> will be rendered as an `<a>` tag by default -->
    <router-link to="/">Go to home</router-link>
    <router-link to="/playing">Go to playing</router-link>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'top-nav',
    data () {
      return {
        msg: 'asdf'
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
