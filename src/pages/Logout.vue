<template>
  <div class="logout">
    Processing logout request
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'logout',
    created: function () {
      let apiurl = this.$root.$data.server.origin + '/api/logout.php'
      console.log(apiurl)
      this.$http.get(apiurl).then((response) => {
        let data = response.body

        if (data.valid) {
          delete window.localStorage.cn_auth
          this.$router.replace({ path: '/login' })
        }
      }, (response) => { //
        // Error callback
      })
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  /* SASS imports */
  @import "../sass/Variables";
  @import "../sass/Mixins";

  .logout {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: color-text(color(background), secondary);
    font-size: 1.2em;
  }
</style>
