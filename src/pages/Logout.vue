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
      this.$apiget('logout', [], (data) => {
        // Console log any errors
        if (data.error) { console.log(data); return false }

        if (data.valid) {
          delete window.localStorage.cn_auth
          this.$router.replace({ path: '/login' })
        }
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
