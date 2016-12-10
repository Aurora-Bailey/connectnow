<template>
  <div class="search" >
    search
    <button type="button" class="btn btn-secondary">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>

    <br>
    <div  class="">
      <i class="fa fa-smile-o md" aria-hidden="true"></i>
      font fa
    </div>
    <div  class="">
      <i class="material-icons md">face</i>
      font g
    </div>
    <div  class="">
      <i class="mdi mdi-face md"></i>
      font m
    </div>
    <div  class="">
      <svg fill="#000000" height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/>
        <path d="M0 0h24v24H0z" fill="none"/>
      </svg>
      svg g
    </div>
    <div  class="">
      <svg  style="width:48px;height:48px" viewBox="0 0 24 24">
        <path fill="#000000" d="M9,11.75A1.25,1.25 0 0,0 7.75,13A1.25,1.25 0 0,0 9,14.25A1.25,1.25 0 0,0 10.25,13A1.25,1.25 0 0,0 9,11.75M15,11.75A1.25,1.25 0 0,0 13.75,13A1.25,1.25 0 0,0 15,14.25A1.25,1.25 0 0,0 16.25,13A1.25,1.25 0 0,0 15,11.75M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,11.71 4,11.42 4.05,11.14C6.41,10.09 8.28,8.16 9.26,5.77C11.07,8.33 14.05,10 17.42,10C18.2,10 18.95,9.91 19.67,9.74C19.88,10.45 20,11.21 20,12C20,16.41 16.41,20 12,20Z" />
      </svg>
      svg m
    </div>
    <div  class="">
      <div class="asdf"></div>
      svg g npm style div
    </div>
    <div  class="">
      <img src="../../node_modules/material-design-icons/action/svg/production/ic_face_48px.svg" />
      svg g npm img src
    </div>
    <div  class="">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M18 23.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm12 0c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zM24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm0 36c-8.82 0-16-7.18-16-16 0-.58.04-1.15.1-1.71 4.71-2.09 8.47-5.95 10.42-10.74 3.62 5.1 9.57 8.45 16.31 8.45 1.55 0 3.06-.19 4.5-.53.43 1.44.67 2.96.67 4.53 0 8.82-7.18 16-16 16z"/></svg>
      svg g npm inline
    </div>



  </div>
</template>

<script>
  /* Components */

  export default {
    name: 'search'
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  /* SASS imports */
  @import "../sass/Variables"
  @import "../sass/Mixins"

  .search
    color: red

  .md
    width: 48px
    height: 48px
    font-size: 48px

  .asdf
    width: 48px
    height: 48px
    display: inline-block
    background-image: url(../../node_modules/material-design-icons/action/svg/production/ic_face_48px.svg), none // asdf

</style>
