<template>
  <div id="app">
    <top-nav></top-nav>

    <!-- route outlet -->
    <!-- component matched by the route will render here -->

    <transition name="slide-fade">
      <router-view></router-view>
    </transition>

    <transition name="drop-fade">
      <router-view class="router-popup" name="popup"></router-view>
    </transition>
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
  // Bootstrap @import '../node_modules/bootstrap/scss/bootstrap.scss'
  @import "sass/Variables"
  @import "sass/Mixins"
  @import "sass/General"

  #app
    position: relative
    min-height: 100%
    overflow-x: hidden
    overflow-y: auto

</style>
