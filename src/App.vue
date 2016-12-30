<template>
  <div id="app">
    <!-- route outlet -->
    <!-- component matched by the route will render here -->

    <transition name="slide-fade">
      <router-view class="router-nav" name="nav"></router-view>
    </transition>

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

  export default {
    name: 'app',
    beforeCreate: function () {
      if (window.localStorage && !window.localStorage.cn_auth) {
        this.$router.replace({path: '/login'})
      }
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
