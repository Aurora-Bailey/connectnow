<template>
  <div id="not-found" >
    404 Page not found!
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'not-found'
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  #not-found
    color: red

</style>
