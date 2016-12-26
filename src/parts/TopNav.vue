<template>
  <div id="top-nav">

    <div class="top-nav-fixed">
      <!-- use router-link component for navigation. -->
      <!-- specify the link by passing the `to` prop. -->
      <!-- <router-link> will be rendered as an `<a>` tag by default -->
      <router-link class="nav-link home" to="/"></router-link>

      <div class="mobile-toggle" v-on:click="toggle=!toggle"><i class="material-icons">&#xE5D2;</i></div>
      <div class="mobile-contain" :class="{open: toggle}">
        <router-link class="nav-link matches" to="/matches">matches</router-link>
        <router-link class="nav-link connections" to="/connections">connections</router-link>
        <router-link class="nav-link groups" to="/groups">groups</router-link>
        <router-link class="nav-link profile" to="/profile">profile</router-link>
      </div>
    </div>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'top-nav',
    watch: {
      '$route' () {
        this.toggle = false
      }
    },
    data () {
      return {
        toggle: false
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  /* SASS Variables */
  $nav-height: 65px

  #top-nav
    height: $nav-height

    .top-nav-fixed
      position: fixed
      z-index: z(floating)
      top: 0
      left: 0
      right: 0
      box-shadow: 0 2px 8px 0 rgba(50, 50, 50, 0.08)
      background-color: color(background)

    .nav-link
      height: $nav-height
      line-height: $nav-height
      padding: 0 15px
      display: inline-block
      font-size: 13px
      font-weight: bold
      text-transform: uppercase
      vertical-align: text-top
      color: color-text(color(background), secondary)

      &:hover
        color: color-text(color(background), primary)

    .router-link-active
      color: color(primary)

    .mobile-toggle
      display: none
      position: absolute
      top: 10px
      right: 20px
      width: 45px
      height: 45px
      text-align: center
      line-height: 45px
      font-size: 25px
      cursor: pointer

    .mobile-contain
      float: right
      display: inline-block
      max-height: $nav-height
      overflow: hidden
      padding: 0 20px

    .home
      margin-left: 20px
      width: 265px
      height: $nav-height
      padding: 0
      display: inline-block
      background-image: url('../assets/logo.png')
      background-repeat: no-repeat
      background-position: center
      cursor: pointer

    +respond-under(w840)
      .nav-link
        height: 55px
        line-height: 55px
        display: block

      .home
        height: $nav-height

      .mobile-toggle
        display: inline-block

      .mobile-contain
        float: none
        display: block
        max-height: 0
        box-shadow: inset 0 1px 1px 0 color-level(background, -1)
        transition: max-height .5s ease

        &.open
          max-height: 350px

  .asdf
    opacity: 1
</style>
