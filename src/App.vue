<template>
  <div id="app">
    <top-nav></top-nav>

    <!-- route outlet -->
    <!-- component matched by the route will render here -->
    <router-view></router-view>
  </div>
</template>

<script>
  /* Core */
  import VueRouter from 'vue-router'

  /* Components */
  import TopNav from './parts/TopNav'

  export default {
    name: 'app',
    components: {
      TopNav
    }
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
