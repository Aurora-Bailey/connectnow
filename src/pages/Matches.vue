<template>
  <div id="matches" >
    <div class="card filter">
      <div class="section head">
        <div class="search">
          <i class="material-icons search-icon">search</i>
          <input class="search-input" type="text" placeholder="Search">
        </div>
        <div class="toggle_filter_options" @click="filter_options=!filter_options">
          <i class="material-icons">settings</i>
        </div>
      </div>

      <div class="section options" :class="{open: filter_options}">
        <div class="category individual-tag">
          <div class="text">Individual Tag:</div>
          <input type="text">
        </div>

        <div class="category sex">
          <div class="text">Sex:</div>
          <select>
            <option value="male" selected>Male</option>
            <option value="female">Female</option>
            <option value="yes">Yes</option>
          </select>
        </div>

        <div class="category proximity">
          <div class="text">Proximity:</div>
          <div class="multirange">
            <input value="10" type="range">
            <input type="range">
          </div>
        </div>

        <div class="category age">
          <div class="text">Age:</div>
          <div class="multirange">
            <input value="10" type="range">
            <input type="range">
          </div>
        </div>

        <div class="category experience">
          <div class="text">Experience:</div>
          <div class="multirange">
            <input value="10" type="range">
            <input type="range">
          </div>
        </div>
      </div>
    </div>
    <div class="card matches">
      <div class="section multiple">
        <div class="title">Multiple Matches</div>
        <div v-for="match in matches" class="person">
          <div class="picture" :style="{backgroundImage: 'url(' + match.picture + ')'}"></div>
          <div class="age">Age: {{match.age}}</div>
          <div class="location">Location: {{match.location}}</div>
        </div>
      </div>
      <div class="section single">
        <div class="title">Specific Tag</div>
        <div v-for="match in matches" class="person">
          <div class="picture" :style="{backgroundImage: 'url(' + match.picture + ')'}"></div>
          <div class="age">Age: {{match.age}}</div>
          <div class="location">Location: {{match.location}}</div>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'matches',
    data () {
      return {
        matches: [],
        preview: {},
        filter_options: false
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

    .filter .head
      color: color-text(color(background), secondary)
      position: relative

      .toggle_filter_options
        display: inline-block
        position: absolute
        top: 0
        right: 6px
        bottom: 0
        margin: auto
        height: 24px
        width: 24px
        font-size: 24px
        cursor: pointer

      .search
        position: relative
        margin-right: 36px

        .search-icon
          height: 24px
          width: 24px
          font-size: 24px
          position: absolute
          top: 0
          left: 12px
          bottom: 0
          margin: auto

        .search-input
          padding-left: 36px

    .filter .options
      max-height: 0
      padding: 0 3px
      overflow: hidden
      transition: all .5s ease
      +contain()

      &.open
        max-height: 400px

      .category
        +span(4, 4)
        padding: 10px

        +respond-over(w480)
          +span(4, 12)
          height: 75px
          text-align: center

    .section
      .title
        padding: 10px
        font-weight: bold

    .person
      white-space: nowrap
      border-bottom: 1px solid color-text(color(background), divider)

      .age, .location, .picture
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
