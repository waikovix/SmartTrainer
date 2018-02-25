<template>
  <div>
    <md-card>
      <md-card-header>
        <h1>Calories</h1>
      </md-card-header>
      <md-card-content>
        <h2>160/3060</h2>
      </md-card-content>
    </md-card>
  <br>
    <md-card>
      <md-card-header>
        <div class="md-title">Breakfast</div>
        <div class="md-subhead">160kcal</div>
      </md-card-header>

      <md-card-expand>
        <md-card-actions md-alignment="space-between">
           <div>
            <md-button class = 'md-icon-button' @click = 'showDialog = true'>
              <md-icon>add</md-icon>
            </md-button>
          </div>

          <md-card-expand-trigger>
            <md-button class="md-icon-button">
              <md-icon>keyboard_arrow_down</md-icon>
            </md-button>
          </md-card-expand-trigger>
        </md-card-actions>

        <md-card-expand-content>
          <md-card-content>
           <ul v-for = "item in breakfast">
             <li>{{ item.name }}</li>
           </ul>
          </md-card-content>
        </md-card-expand-content>
      </md-card-expand>
    </md-card>
    <md-dialog :md-active.sync="showDialog" >
      <md-dialog-title>Breakfast</md-dialog-title>
      <md-tabs md-dynamic-height>
        <md-tab md-label="Foods"  >

          <model-select :options="foods"
                        v-model="item"
                        placeholder="select item"
                        @select="onSelect">
          </model-select>
  </md-tab>
      </md-tabs>

      <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Close</md-button>
        <md-button class="md-primary" @click="showDialog = false">Save</md-button>
      </md-dialog-actions>
    </md-dialog>
  </div>
</template>

<script>
  import { ModelSelect } from 'vue-search-select'
  export default {
    name: 'calories',
    data: () => ({
      showDialog: false,
      breakfast: [{

      }],
      searched: [],
      foods: [{
        value: '1',
        text: 'Foo' + ' - ' + '1096kcal'
      }],
      item: {
        value: '',
        text: ''
      }
    }),
    methods: {
      onSelect (item) {
        this.breakfast.push(item)
      },
      reset () {
        this.item = {}
      },
      selectOption () {
        // select option from parent component
        this.item = this.user[0]
      }
    },
    components: {
      ModelSelect
    }
  }
</script>

<style scoped>
li{
  list-style:none;
}
</style>
