<template>
  <div id="matches" >
    <div class="card filter">
      <div class="section head">
        <div class="search">
          <i class="material-icons search-icon">search</i>
          <input v-model="options_search" class="input search-input" type="text" placeholder="Search" @change="loadMatches">
        </div>
        <div class="toggle_filter_options" @click="filter_options=!filter_options">
          <i class="material-icons">settings</i>
        </div>
      </div>

      <div class="section options" :class="{open: filter_options}">
        <div class="category individual-tag">
          <div class="text">Individual Tag:</div>
          <input v-model="options_tags" class="input" type="text" @change="loadMatches">
        </div>

        <div class="category sex">
          <div class="text">Sex:</div>
          <select v-model="options_sex" @change="loadMatches">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="both">Both</option>
          </select>
        </div>

        <div class="category proximity">
          <div class="text">Proximity:</div>
          <div class="multirange">
            <input v-model="options_proximity_low" type="range" @change="loadMatches">
            <input v-model="options_proximity_high" type="range" @change="loadMatches">
          </div>
        </div>

        <div class="category age">
          <div class="text">Age:</div>
          <div class="multirange">
            <input v-model="options_age_low" type="range" @change="loadMatches">
            <input v-model="options_age_high" type="range" @change="loadMatches">
          </div>
        </div>

        <div class="category experience">
          <div class="text">Experience:</div>
          <div class="multirange">
            <input v-model="options_experiance_low" type="range" @change="loadMatches">
            <input v-model="options_experiance_high" type="range" @change="loadMatches">
          </div>
        </div>
      </div>
    </div>
    <div class="card matches">

      <div class="section multiple">
        <div class="title">Multiple Matches</div>
        <div v-for="match in matches" class="person">
          <router-link class="person_link" :to="{ name: 'matches_popup', params: { type: 'invite', id: 12345 }}">
            <div class="info image"> <div class="picture" :style="{backgroundImage: 'url(' + match.picture + ')'}"></div></div>
            <div class="info name"><span class="v-center">{{match.name}}</span></div>
            <div class="info age"><span class="v-center">{{match.age}}</span></div>
            <div class="info location"><span class="v-center">{{match.location}}</span></div>
          </router-link>
        </div>
      </div>
      <div class="section single">
        <div class="title">Specific Tag</div>
        <div v-for="match in matches" class="person">
          <router-link class="person_link" :to="{ name: 'matches_popup', params: { type: 'invite', id: 12345 }}">
            <div class="info image"> <div class="picture" :style="{backgroundImage: 'url(' + match.picture + ')'}"></div></div>
            <div class="info name"><span class="v-center">{{match.name}}</span></div>
            <div class="info age"><span class="v-center">{{match.age}}</span></div>
            <div class="info location"><span class="v-center">{{match.location}}</span></div>
          </router-link>
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
        filter_options: false,
        options_search: '',
        options_tags: '',
        options_sex: 'both',
        options_proximity_low: 0,
        options_proximity_high: 100,
        options_age_low: 0,
        options_age_high: 100,
        options_experiance_low: 0,
        options_experiance_high: 100
      }
    },
    methods: {
      loadMatches: function (e) {
        // Set Query
        let query = []
        query.push('search=' + this.options_search)
        query.push('tags=' + this.options_tags)
        query.push('sex=' + this.options_sex)
        query.push('proximity=' + this.options_proximity_low + ',' + this.options_proximity_high)
        query.push('age=' + this.options_age_low + ',' + this.options_age_high)
        query.push('experiance=' + this.options_experiance_low + ',' + this.options_experiance_high)

        this.$apiget('matches', query, (data) => {
          // Console log any errors
          if (data.error) { console.log(data); return false }

          // Remove old data
          while (this.matches.length > 0) this.matches.shift()

          // Success callback
          for (let i = 0; typeof data.results[i] !== 'undefined'; i++) {
            let r = data.results[i]
            this.matches.push({name: r.name.first, picture: r.picture.medium, age: 2016 - parseInt(r.dob.slice(0, 4)), location: r.location.city + ', ' + r.location.state})
          }
        })
      }
    },
    mounted: function () {
      this.loadMatches()
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
      position: relative
      border-bottom: 1px solid color-text(color(background), divider)
      color: color-text(color(background), secondary)
      font-size: 18px
      font-weight: bold
      cursor: pointer
      +contain()

      .person_link
        color: inherit
        text-decoration: none
        display: block

      &:hover
        color: color-text(color(background), primary)

      .info
        text-transform: capitalize
        position: relative
        padding: 10px
        text-align: center
        // outline: 1px solid red

        &.image
          +span(4,4)
        &.name
          +span(2,4)
        &.age
          +span(2,4)
        &.location
          +span(4,4)

        +respond-over(w480)
          min-height: 95px
          text-align: left

          &.image
            +span(3,12)
          &.name
            +span(3,12)
          &.age
            +span(2,12)
          &.location
            +span(4,12)

          .v-center
            position: absolute
            top: 50%
            transform: translate(0, -50%)

      .picture
        vertical-align: middle
        display: inline-block
        width: 75px
        height: 75px
        border-radius: 75px
        background-position: center
        background-size: cover
        box-shadow: 0 1px 2px rgba(0,0,0,.1);

  .asdf
    display: none

</style>
