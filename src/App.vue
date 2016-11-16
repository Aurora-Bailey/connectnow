<template>
  <div id="app">
    <!-- use router-link component for navigation. -->
    <!-- specify the link by passing the `to` prop. -->
    <!-- <router-link> will be rendered as an `<a>` tag by default -->
    <router-link to="/home">Go to home</router-link>
    <router-link to="/playing">Go to playing</router-link>

    <!-- route outlet -->
    <!-- component matched by the route will render here -->
    <router-view></router-view>
  </div>
</template>

<script>
  /* Core */
  import VueRouter from 'vue-router'

  /* Components */

  export default {
    name: 'app'
  }
</script>

<style lang="sass">
  /* SASS imports */
  @import "sass/Variables"
  @import "sass/Mixins"
  @import "sass/General"

  #app
    opacity: 1

</style>
