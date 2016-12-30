<template>
  <div class="login">

    <div class="description">
      <div class="section-padding">
        <h2 class="title">Find like-minded people</h2>
        <p class="article">
          Want to connect with people who share your passions and interests in life? We do, too. That's why we created Connect Now — A platform for connecting to people who like what you like and want to meet, hang out with, or just talk to someone like you.
        </p>
        <h2 class="title">Want to learn from the greats?</h2>
        <p class="article">
          Connect to pros and beginners alike, share your knowledge, and learn from other people by sharing ideas, images, and files through our platform. Tell us your level of skill in a particular area so we can help you connect to the right individuals for whatever you're trying to do.
        </p>
    </div>
    </div>
    <div class="signup">
      <div class="section-padding">
        <form @submit.prevent="sendForm">
          <div class="contain-form">
            <div class="field"><h1 class="title">Sign Up</h1></div>
            <div class="field padded"><h3 class="title-secondary">It’s free and always will be.</h3></div>
            <div class="field double padded"><input class="input" placeholder="First Name" name="firstname" type="text"/></div>
            <div class="field double padded"><input class="input" placeholder="Last Name" name="lastname" type="text"/></div>
            <div class="field"><input class="input" placeholder="Username" name="username" type="text"/></div>
            <div class="field"><input class="input" placeholder="Email" name="email" type="email"/></div>
            <div class="field"><input class="input" placeholder="New Password" name="password" type="password"/></div>
            <div class="field padded"><input class="input" placeholder="Zip Code" name="zipcode" type="text"/></div>

            <div class="field padded">
              Birthday:<br>
              <select name="birthday_month" title="Month">
                 <option value="0" selected="1">Month</option>
                 <option value="1">Jan</option>
                 <option value="2">Feb</option>
                 <option value="3">Mar</option>
                 <option value="4">Apr</option>
                 <option value="5">May</option>
                 <option value="6">Jun</option>
                 <option value="7">Jul</option>
                 <option value="8">Aug</option>
                 <option value="9">Sep</option>
                 <option value="10">Oct</option>
                 <option value="11">Nov</option>
                 <option value="12">Dec</option>
              </select>
              <select name="birthday_day" title="Day">
                <option value="0" selected>Day</option>
                <option :value="index + 1" v-for="(a, index) in new Array(32)">{{index + 1}}</option>
              </select>
              <select name="birthday_year"title="Year">
                <option value="0" selected>Year</option>
                <option :value="2016 - index" v-for="(a, index) in new Array(100)">{{2016 - index}}</option>
              </select>
            </div>

            <div class="field padded">
              <span class="radio-option">
                <input type="radio" name="sex" value="1">
                <label>Female</label>
              </span>
              <span class="radio-option">
                <input type="radio" name="sex" value="2">
              <label>Male</label>
              </span>
            </div>



            <div class="field">
              <p class="terms-of-service">
                By clicking Create Account, you agree to our Terms and that you have read our Data Policy, including our Cookie Use. You may receive SMS Notifications from Facebook and can opt out at any time.
              </p>
            </div>
            <div class="field"><input class="submit" type="submit" value="Create Account"/></div>
          </div>
        </form>

      </div>

    </div>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'login',
    data () {
      return {
        signup: true // toggle login and signup
      }
    },
    methods: {
      sendForm: function (e) {
        let apiurl = this.$root.$data.server.origin + '/api/signup.php'
        console.log(apiurl)
        let form = e.target
        let formData = new window.FormData(form)

        // request new data
        this.$http.post(apiurl, formData, {credentials: true}).then((response) => {
          let data = response.body

          if (data.valid) {
            window.localStorage.cn_auth = data.token
            this.$router.replace({ path: this.$root.$data.server.path === '/login' ? '/' : this.$root.$data.server.path })
          }
        }, (response) => { //
          // Error callback
        })
        return false
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  h1
    font-size: 2em
    color: color-text(color(background), secondary)

  h2
    font-size: 1.3em
    color: color-text(color(background), secondary)

  h3
    font-size: 1.1em
    font-weight: normal
    color: color-text(color(background), secondary)

  .login
    +contain()

  .description, .signup
    +span(6, 12)

  .section-padding
    max-width: 600px
    margin: auto
    padding: 20px

  .description
    .article
      padding: 20px 0
      color: color-text(color(background), secondary)

  .signup
    .contain-form
      +contain()

    .field
      padding: 3px 5px
      +span(6, 6)

      &.padded
        padding-bottom: 20px

      &.double
        +span(3, 6)

    .radio-option
      padding: 2px 5px

    .terms-of-service
      font-size: 10px
      padding: 10px 0
      max-width: 300px

    .submit
      background: #34d934
      background-image: linear-gradient(to bottom, #34d934, #4e9e26)
      border-radius: 8px
      border: none
      color: #ffffff
      font-size: 20px
      padding: 8px 20px
      text-decoration: none
      cursor: pointer

      &:hover
        background: #34d934
        background-image: linear-gradient(to bottom, #34d934, #2dbd2d)
        text-decoration: none


  +respond-under(w600)
    .description, .signup
      +span(6, 6)

</style>
