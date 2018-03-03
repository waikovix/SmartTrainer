<template>
<div>
    <md-table v-model="progress" md-sort="name" md-sort-order="asc" md-card md-fixed-header >
        <md-table-toolbar>
            <div class="md-toolbar-section-start">
                <h1 class="md-title">Exercise progress</h1>
            </div>

            <md-field md-clearable class="md-toolbar-section-end">
                <md-input placeholder="Search by name..." v-model="search" @input="searchOnTable" />
            </md-field>
        </md-table-toolbar>

        <md-table-empty-state
                md-label="No records found"
                :md-description="`No records found for this '${search}' query. Try a different search term or create a new record.`">
            <md-button class="md-primary md-raised" @click="showDialog = true">Create New record</md-button>
        </md-table-empty-state>

        <md-table-row slot="md-table-row" slot-scope="{ item }">
            <md-table-cell md-label="ID" md-sort-by="id" md-numeric>{{ item.id }}</md-table-cell>
            <md-table-cell md-label="Name" md-sort-by="name">{{ item.name }}</md-table-cell>
            <md-table-cell md-label="Email" md-sort-by="email">{{ item.email }}</md-table-cell>
            <md-table-cell md-label="Gender" md-sort-by="gender">{{ item.gender }}</md-table-cell>
            <md-table-cell md-label="Job Title" md-sort-by="title">{{ item.title }}</md-table-cell>
        </md-table-row>
    </md-table>
 <md-table v-model="kg_progress" md-sort="name" md-sort-order="asc" md-card md-fixed-header>
        <md-table-toolbar>
            <div class="md-toolbar-section-start">
                <h1 class="md-title">Kg progress</h1>
            </div>
        </md-table-toolbar>

        <md-table-empty-state
                md-label="No records found"
                :md-description="`No records found`">
            <md-button class="md-primary md-raised" @click="showDialog = true">Create New record</md-button>
        </md-table-empty-state>

        <md-table-row slot="md-table-row" slot-scope="{ item }">
            <md-table-cell md-label="ID" md-sort-by="id" md-numeric>{{ item.id }}</md-table-cell>
            <md-table-cell md-label="Name" md-sort-by="name">{{ item.name }}</md-table-cell>
            <md-table-cell md-label="Email" md-sort-by="email">{{ item.email }}</md-table-cell>
            <md-table-cell md-label="Gender" md-sort-by="gender">{{ item.gender }}</md-table-cell>
            <md-table-cell md-label="Job Title" md-sort-by="title">{{ item.title }}</md-table-cell>
        </md-table-row>
    </md-table>
     <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Preferences</md-dialog-title>

      <md-tabs md-dynamic-height>
        <md-tab md-label="Exercise Progress">
            <md-field>
        <label>Type here!</label>
        <md-input v-model="type"  @keyup = "searchProgress"></md-input>
        <span class="md-helper-text">Helper text</span>
    </md-field>
        </md-tab>

        <md-tab md-label="Kg Progress">
          <form class="" action="/progress/kg/add" method="post">
              
              <div class="form-group">
                  <label for="kg" class="col-md-4 control-label">KG:</label>

                  <div class="col-md-6">
                      <input id="kg" type="number" step="any" class="form-control" name="kg" value="" required autofocus>
                  </div>
              </div>
              <div class="form-group">
                  <label for="body_fat" class="col-md-4 control-label">Body fat %:</label>

                  <div class="col-md-6">
                      <input id="body_fat" type="number" step="any" class="form-control" name="body_fat" value="" required autofocus>
                  </div>
              </div>
              <div class="form-group">


                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                  </div>
              </div>
          </form>

        </md-tab>


      </md-tabs>

      <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Close</md-button>
      </md-dialog-actions>
    </md-dialog>

</div>
</template>

<script>
      const toLower = text => {
    return text.toString().toLowerCase()
  }

  const searchByName = (items, term) => {
    if (term) {
      return items.filter(item => toLower(item.name).includes(toLower(term)))
    }

    return items
  }
    import axios from 'axios'
    export default {
        name: "progress",
        props:['csrf'],
        data: () => ({
                search: null,
                searched: [],
                createprogress:false,
                progress:[],
                kg_progress:[],
                showDialog:false,
                type:'',
                data:[]
    }),
    methods:{
        fetchData:function(){
            let app = this;
            axios.get('/progress/exercise').then(function(response){
                app.progress.push(response.model);
            }).catch(function(error){
                console.log(error);
            });
            axios.get('/progresss/kg').tnen(function(response){
              app.kg_progress.push(response.model);
            }).catch(function(error){
                console.log(error);
            });
        },
        searchProgress: function(){
          let app = this;
            axios.get('progress/exercise/search/'+app.type).then(function(response){
              console.log(response);
            }).catch(function(error){
              console.log(error);
            });
        }
    },
    created(){
            this.fetchData();
        }
    }
</script>

<style scoped>
    .md-table{
        width:45%;
        float:left;

    }

</style>
