<template>
  <div id="profile" >
    profile
    <br>
    <router-link class="" to="/logout">Logout</router-link>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'profile'
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  #profile
    color: red

</style>
