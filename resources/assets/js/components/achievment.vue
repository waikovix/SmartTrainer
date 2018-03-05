<template lang="html">
  <md-card class="md-primary md-elevation-24" >
        <md-card-header>
          <md-card-header-text>
            <div class="md-title">Achievment GET</div>
            <div class="md-subhead">{{text}}</div>
          </md-card-header-text>

          <md-card-media>
            <img :src="img" alt="Avatar">
          </md-card-media>
        </md-card-header>
      </md-card>

</template>

<script>
export default {
  name:"achievment",
  props:['img','text'],
}
</script>

<style lang="css" scoped>

 .md-card {
   width: 320px;
   margin: 4px;
   display: inline-block;
   vertical-align: top;
 }
</style>
