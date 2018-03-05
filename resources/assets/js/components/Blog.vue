<template>
  <div>
    <br>
    <blog-item v-for = "item in items" title = 'item.title' post_id = 'item.id'></blog-item>
  </div>
</template>

<script>
    export default {
      name: 'blog',
      data:() =>({
      show   : false, // display content after API request
      offset : 5,     // items to display after scroll
      display: 5,     // initial items
      trigger: 300,   // how far from the bottom to trigger infinite scroll
      items  : [],    // server response data
      end    : false,
       // no more resources
  }),
      methods:{
          fetchData:function(){
              let app = this;
              axios.get('/blog/'+app.offset).then(function(response){
                app.items = (response.data.model);
                app.url = 'blog/post/'+app.items.id
                console.log(app.items);
              });

          },
    scroll:function() {
        window.onscroll = ev => {
            if (
                window.innerHeight + window.scrollY >=
                (document.body.offsetHeight - this.trigger)
            ) {
                if (this.display < this.items.length) {
                    this.display = this.display + this.offset;
                }
                else {
                    this.end = true;
                }
            }
        };
    }
},
mounted() {
    // track scroll event
    this.scroll();
},
created() {
    // get the data by performing API request
    this.fetchData();
}
    }
</script>

<style scoped>

</style>
