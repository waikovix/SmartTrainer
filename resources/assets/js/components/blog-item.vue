<template lang="html">

  <md-card md-with-hover>
      <md-ripple>
        <md-card-header>
          <div class="md-title"><a :href="urll">{{title}}</a></div>
        </md-card-header>

      </md-ripple>
    </md-card>

</template>

<script>
export default {
  props:['title','post_id'],
  data:() => ({
    url:''
  }),
  computed:{
    urll: function(){
      this.url = '/blog.post/'+this.post_id
    }
  }

}
</script>

<style lang="css">
</style>
