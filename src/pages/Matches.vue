<template>
  <div id="matches" >
    <div class="search-by">
      <div class="title">Search</div>

      <div class="category individual-tag">
        <div class="text">Individual Tag:</div>
        <input class="input" type="text">
      </div>

      <div class="category sex">
        <div class="text">Sex:</div>
        <select class="input">
          <option value="male" selected>Male</option>
          <option value="female">Female</option>
          <option value="yes">Yes</option>
        </select>
      </div>

      <div class="category proximity">
        <div class="text">Proximity:</div>
        <div class="multirange">
          <input class="input" value="10" type="range">
          <input class="input" type="range">
        </div>
      </div>

      <div class="category age">
        <div class="text">Age:</div>
        <div class="multirange">
          <input class="input" value="10" type="range">
          <input class="input" type="range">
        </div>
      </div>

      <div class="category experience">
        <div class="text">Experience:</div>
        <div class="multirange">
          <input class="input" value="10" type="range">
          <input class="input" type="range">
        </div>
      </div>

      <div class="category joke">
        max-width:
        <br>
        150px
      </div>

    </div>
    <div class="multiple-matches">
      <div class="title"></div>
      <div v-for="match in matches" class="card">
        <div class="info picture" :style="{backgroundImage: 'url(' + match.picture + ')'}"></div>
        <div class="info age">Age: {{match.age}}</div>
        <div class="info location">Location: {{match.location}}</div>
      </div>
    </div>
    <div class="preview-person"></div>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'matches',
    data () {
      return {
        matches: [],
        preview: {}
      }
    },
    mounted: function () {
      // remove old data
      while (this.matches.length > 0) this.matches.shift()

      // request new data
      this.$http.get('https://randomuser.me/api/?results=10&inc=picture,dob,location').then((response) => {
        // success callback
        let i = 0
        while (typeof response.body.results[i] !== 'undefined') {
          let r = response.body.results[i]
          this.matches.push({picture: r.picture.medium, age: 2016 - parseInt(r.dob.slice(0, 4)), location: r.location.city + ', ' + r.location.state})
          i++
        }
      }, (response) => {
        // error callback
      })
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass">
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  #matches

    .search-by
      position: fixed
      top: 65px // for top nav
      left: 0
      bottom: 0
      z-index: 999
      display: inline-block
      width: 210px
      text-align: center
      box-shadow: 5px 10px 15px 5px rgba(0,0,0,.1);
      border-top: 1px solid darken($base, 10%)
      background-color: $base

      .title
        margin: 30px 0
        font-size: 1.3em
        text-decoration: underline

      .category
        margin: 20px 0
        padding: 0 15px

        .text
          margin-bottom: 10px

        .input
          width: 100%

    .multiple-matches
      margin-left: 250px
      margin-top: 40px
      width: 550px

      .card
        background-color: $base
        padding: 10px
        margin: 10px 0
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
        white-space: nowrap

        .info
          display: inline-block
          vertical-align: text-top
          line-height: 75px
          margin: 10px
          text-transform: capitalize

        .picture
          width: 75px
          height: 75px
          border-radius: 75px
          background-position: center
          background-size: cover
          box-shadow: 0 1px 2px rgba(0,0,0,.1);

  .asdf
    display: none

</style>
