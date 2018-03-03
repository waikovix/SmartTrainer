
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vue from 'vue'
import axios from 'axios'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'
import Progress from './components/Progress'

Vue.use(VueMaterial)
Vue.component('progress-bar', {
    props: [ 'value', 'valueof', 'element' ],
    template: ' <div id="myProgress"><div v-bind:id="myBar-green">{{element}} : {{value}} / {{valueof}}g</div> </div>'
  });
Vue.component('meal-item',{
    props:['mealid','name',],
    template:'<a :href = "BuildUrl">{{name}}</a>',
    data:() =>({
    url:''
}),
    computed:{
    BuildUrl: function () {
        var id = this.mealid
        return this.mealid = '/meals/add/'+id;
    }
}
});
Vue.component('item',{
    props:['mealid','name','urll'],
    template:'<a :href = "BuildUrl">{{name}}</a>',
    data:() =>({
    url:''
}),
    computed:{
    BuildUrl: function () {
        var id = this.mealid
        return this.mealid = this.urll +id;
    }
}
});
  Vue.component('meal-info',{
    props:['calories','protein','carbs','fat',],
    template:' <div>' +
    '<div class="form-group">\n' +
    '                            <label for="amount" class="col-md-4 control-label">amount 1gr</label>\n' +
    '\n' +
    '                            <div class="col-md-6">\n' +
    '                                <input id="amount" type="number" class="form-control" name="amount" v-model="amount" required autofocus @keyup = "Calculte_Calories">\n' +
    '\n' +
    '                                \n' +
    '                            </div>\n' +
    '                        </div><div class="form-group">\n' +
    '                            <label for="calories" class="col-md-4 control-label">Calories</label>\n' +
    '\n' +
    '                                <div class="col-md-6">\n' +
    '                                <input type="number" name="calories" id="calories" class="form-control"  v-model ="this.newcalories">\n' +
    '                                </div>\n' +
    '                            </div>\n' +
    '                            <div class="form-group">\n' +
    '                            <label for="proteint" class="col-md-4 control-label">Protein</label>\n' +
    '\n' +
    '                                    <div class="col-md-6">\n' +
    '                                <input type="number" name="protein" id="protein" class="form-control"   v-model ="this.newprotein">\n' +
    '                                    </div>\n' +
    '                                </div>\n' +
    '                                <div class="form-group">\n' +
    '                                        <label for="carbs" class="col-md-4 control-label">Carbs</label>\n' +
    '                                        <div class="col-md-6">\n' +
    '                                            <input type="number" name="carbs" id="carbs" class="form-control"  v-model ="this.newcarbs">\n' +
    '                                        </div>\n' +
    '                                </div>\n' +
    '                                <div class="form-group">\n' +
    '                                <label for="fat" class="col-md-4 control-label">Fat</label>\n' +
    '                                        <div class="col-md-6">\n' +
    '                                    <input type="number" name="fat" id="fat" class="form-control"  v-model ="this.newfat">\n' +
    '                                        </div>\n' +
    '                                </div>' +
    '</div>',
    data:() =>({
        amount:0,
          newprotein:this.protein,
          newcarbs:this.carbs,
          newcalories:this.calories,
          newfat:this.fat
      }
    ),
    methods:{
   Calculte_Calories: function () {
       var calories = this.calories;
       var protein = this.protein;
       var carbs = this.carbs;
       var fat = this.fat;
       this.newcalories = Math.floor((calories * this.amount));
       this.newprotein = Math.floor((protein * this.amount));
       this.newfat = Math.floor((fat * this.amount));
       this.newcarbs = Math.floor((carbs * this.amount));

    }
  }
});
  Vue.component('render-post',{
     props:['post-body'],
     template:' <hr> <br> {{post-body}}'
  });
  Vue.component('blog',{
      template:'<div>\n' +
          '<a   v-for = "item in items" hfref = "/blog/post/item.id">'+

      '    <md-card md-with-hover>\n' +
      '      <md-ripple>\n' +
      '        <md-card-header>\n' +
      '          <div class="md-title">Card with hover effect</div>\n' +
      '          <div class="md-subhead">It also have a ripple</div>\n' +
      '        </md-card-header>\n' +
      '\n' +
      '        <md-card-content>\n' +
      '          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque ea, nostrum odio. Dolores, sed accusantium quasi non.\n' +
      '        </md-card-content>\n' +
      '\n' +
      '\n' +
      '      </md-ripple>\n' +
      '    </md-card>\n' +
      '   </a> ' +
      '   <br> ' +

      '  </div>',
      data:() =>({
      show   : false, // display content after API request
      offset : 5,     // items to display after scroll
      display: 5,     // initial items
      trigger: 300,   // how far from the bottom to trigger infinite scroll
      items  : [],    // server response data
      end    : false, // no more resources

  }),
      methods:{
          fetchData:function(){
              let app = this;
              axios.get('/blog/'+app.offset).then(function(response){
                app.items = response.model;
              });

          },
    scroll() {
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

  });
  Vue.component('user-progress',Progress);

const app = new Vue({
    el: '#app',
    data:{
        menuVisible:false,
        showDialog: false,
        search:'',
        items:'',
        showNutrion:false

    },
    methods:{
        Search(){ //function to search for food and return json
            let app = this;
            axios.get('/meals/search/'+app.search)
        .then(function (response) {
            app.items = [];
            app.items=response.data.model;
  }).catch(function (error) {
    console.log(error);
  });
        },
        findUser(){ //function to search for user and return json
            let app = this;
            axios.get('/users/search/'+app.search)
                .then(function(response){
                    app.items = [];
                    app.items = response.data.model;
                }).catch(function(error){
                    console.log(error);
            });
        },
        findexercise(){ //function to search for user and return json
            let app = this;
            axios.get('/progress/exercise/search/'+app.search)
                .then(function(response){
                    app.items = [];
                    app.items = response.data.model;
                }).catch(function(error){
                    console.log(error);
            });
        }



    }

});
