<template>
  <div class="login">
    <div class="form">
      <ul class="tab-group">
        <li class="tab" :class="{active: signup===true}"><a href="#signup" @click.prevent="signup=true">Sign Up</a></li>
        <li class="tab" :class="{active: signup===false}"><a href="#login" @click.prevent="signup=false">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div v-show="signup">
          <h1>Sign Up for Free</h1>
          <form @submit.prevent="sendForm">

            <div class="top-row">
              <div class="field-wrap">
                <label :class="{active: f.a !== ''}">
                  First Name<span class="req">*</span>
                </label>
                <input v-model="f.a" name="first" type="text" required autocomplete="off" />
              </div>

              <div class="field-wrap">
                <label :class="{active: f.b !== ''}">
                  Last Name<span class="req">*</span>
                </label>
                <input v-model="f.b" name="last" type="text" required autocomplete="off"/>
              </div>
            </div>

            <div class="field-wrap">
              <label :class="{active: f.c !== ''}">
                Email Address<span class="req">*</span>
              </label>
              <input v-model="f.c" name="email" type="email" required autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label :class="{active: f.d !== ''}">
                Set A Password<span class="req">*</span>
              </label>
              <input v-model="f.d" name="password" type="password" required autocomplete="off"/>
            </div>

            <button type="submit" class="button button-block">Get Started</button>

          </form>
        </div>

        <div v-show="!signup">
          <h1>Welcome Back!</h1>

          <form @submit.prevent="sendForm">

            <div class="field-wrap">
              <label :class="{active: f.e !== ''}">
                Email Address<span class="req">*</span>
              </label>
              <input v-model="f.e" name="email" type="email" required autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label :class="{active: f.f !== ''}">
                Password<span class="req">*</span>
              </label>
              <input v-model="f.f" name="password" type="password" required autocomplete="off"/>
            </div>

            <button type="submit" class="button button-block">Log In</button>

          </form>
        </div>

      </div><!-- tab-content -->

    </div> <!-- /form -->
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'login',
    data () {
      return {
        signup: true, // toggle login and signup
        f: {
          a: '',
          b: '',
          c: '',
          d: '',
          e: '',
          f: '',
          g: '',
          h: '',
          i: '',
          j: ''
        }
      }
    },
    methods: {
      sendForm: function (e) {
        let apiurl = this.$root.$data.server.origin + '/api/login.php'
        console.log(apiurl)
        let form = e.target
        let formData = new window.FormData(form)

        // request new data
        this.$http.post(apiurl, formData).then((response) => {
          let results = response.body.results

          if (results.length === 1) {
            this.$set(this.$root.$data, 'user', results[0])
            this.$router.push({ path: '/matches' }) // asdf
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
<style lang="scss" scoped>
  /* SASS imports */
  @import "../sass/Variables";
  @import "../sass/Mixins";

  $form-bg: #13232f;
  $white: #ffffff;

  $main: #1ab188;
  $main-light: lighten($main,5%);
  $main-dark: darken($main,5%);

  $gray-light: #a0b3b0;
  $gray: #ddd;

  $thin: 300;
  $normal: 400;
  $bold: 600;
  $br: 4px;

  a {
    text-decoration:none;
    color:$main;
    transition:.5s ease;
    &:hover {
      color:$main-dark;
    }
  }

  .form {
    background:rgba($form-bg,.9);
    padding: 40px;
    max-width:600px;
    margin:40px auto;
    border-radius:$br;
    box-shadow:0 4px 10px 4px rgba($form-bg,.3);
  }

  .tab-group {
    list-style:none;
    padding:0;
    margin:0 0 40px 0;
    &:after {
      content: "";
      display: table;
      clear: both;
    }
    li a {
      display:block;
      text-decoration:none;
      padding:15px;
      background:rgba($gray-light,.25);
      color:$gray-light;
      font-size:20px;
      float:left;
      width:50%;
      text-align:center;
      cursor:pointer;
      transition:.5s ease;
      &:hover {
        background:$main-dark;
        color:$white;
      }
  }
    .active a {
      background:$main;
      color:$white;
    }
  }

  h1 {
    text-align:center;
    color:$white;
    font-weight:$thin;
    margin:0 0 40px;
  }

  label {
    position:absolute;
    transform:translateY(6px);
    left:13px;
    color:rgba($white,.5);
    transition:all 0.25s ease;
    -webkit-backface-visibility: hidden;
    pointer-events: none;
    font-size:22px;
    .req {
      margin:2px;
      color:$main;
    }
  }

  label.active {
    transform:translateY(50px);
    left:2px;
    font-size:14px;
    .req {
      opacity:0;
    }
  }

  label.highlight {
    color:$white;
  }

  input, textarea {
    font-size:22px;
    display:block;
    width:100%;
    height:100%;
    padding:5px 10px;
    background:none;
    background-image:none;
    border:1px solid $gray-light;
    color:$white;
    border-radius:0;
    transition:border-color .25s ease, box-shadow .25s ease;
    &:focus {
    outline:0;
    border-color:$main;
    }
  }

  textarea {
    border:2px solid $gray-light;
    resize: vertical;
  }

  .field-wrap {
    position:relative;
    margin-bottom:40px;
  }

  .top-row {
    &:after {
      content: "";
      display: table;
      clear: both;
  }

    > div {
      float:left;
      width:48%;
      margin-right:4%;
      &:last-child {
        margin:0;
      }
  }
  }

  .button {
    border:0;
    outline:none;
    border-radius:0;
    padding:15px 0;
    font-size:2rem;
    font-weight:$bold;
    text-transform:uppercase;
    letter-spacing:.1em;
    background:$main;
    color:$white;
    transition:all.5s ease;
    cursor: pointer;
    -webkit-appearance: none;
    &:hover, &:focus {
      background:$main-dark;
    }
  }

  .button-block {
    display:block;
    width:100%;
  }

  .forgot {
    margin-top:-20px;
    text-align:right;
  }
</style>
