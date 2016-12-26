<template>
  <div class="popup" @click.prevent.stop="close">

    <div class="modal" @click.prevent.stop="">
      Popup Content!
    </div>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'popup',
    methods: {
      close: function (e) {
        let pathsplit = this.$route.path.split('/')
        let pathbase = pathsplit[0] === '' ? pathsplit[1] : pathsplit[0]
        this.$router.push({ path: '/' + pathbase })
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  .popup
    position: fixed
    bottom: 0
    right: 0
    left: 0
    top: 0
    margin: auto
    background-color: color-text(color(background), divider)
    z-index: z(overlay)

  .modal
    background-color: white
    width: 500px
    height: 500px
    margin: auto
    position: fixed
    bottom: 0
    right: 0
    left: 0
    top: 0
    box-shadow: 0 1px 20px rgba(0,0,0,0.5);

  .asdf
    opacity: 1
</style>
