<template>
  <div class="top-nav">
    <router-link class="home" to="/login"></router-link>

    <div class="login">
      <form @submit.prevent="sendForm">
        <div class="field"><input class="username input" placeholder="Email" name="email" type="email" /></div>
        <div class="field"><input class="password input" placeholder="Password" name="password" type="password" /></div>
        <div class="field"><input class="submit" type="submit" value="Login" /></div>
      </form>
    </div>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'top-nav-login',
    data () {
      return {
        toggle: false
      }
    },
    methods: {
      sendForm: function (e) {
        // Set data
        let form = e.target
        let formData = new window.FormData(form)

        this.$apipost('signup', formData, (data) => {
          // Console log any errors
          if (data.error) { console.log(data); return false }

          if (data.valid) {
            window.localStorage.cn_auth = data.token
            this.$router.replace({ path: this.$root.$data.server.path === '/login' ? '/' : this.$root.$data.server.path })
          }
        })
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  /* SASS Variables */
  $nav-height: 65px

  .top-nav
    box-shadow: 0 2px 8px 0 rgba(50, 50, 50, 0.08)
    background-color: color(background)

    &:after
      visibility: hidden
      display: block
      font-size: 0
      content: " "
      clear: both
      height: 0

  .home
    float: left
    margin-left: 20px
    width: 265px
    height: $nav-height
    padding: 0
    background-image: url('../assets/logo.png')
    background-repeat: no-repeat
    background-position: center
    cursor: pointer

  .login
    float: right
    height: $nav-height
    margin: 0 20px

    .username, .password
      width: 150px

    .submit
      outline: none
      border: none
      background-color: transparent
      height: 34px
      line-height: 30px
      padding: 2px 5px
      cursor: pointer
      font-size: 13px
      font-weight: bold
      text-transform: uppercase
      color: color-text(color(background), secondary)

      &:hover
        color: color-text(color(background), primary)


  .field
    display: inline-block
    vertical-align: middle
    padding: (($nav-height - 34) /2) (($nav-height - 34) /8)

  +respond-under(w480)
    .login
      height: auto
      width: 100%
      margin: 0
      padding: (($nav-height - 34) /2) (($nav-height - 34) /2)
      .username, .password
        width: 100%
      .submit
        width: 100%
        text-align: center
    .field
      display: block
      padding: (($nav-height - 34) /8) (($nav-height - 34) /8)

  .asdf
    opacity: 1
</style>
