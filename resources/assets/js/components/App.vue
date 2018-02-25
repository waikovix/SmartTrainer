<template>
  <div class="page-container">
    <md-app md-mode="reveal">
      <md-app-toolbar class="md-primary">
        <md-button class="md-icon-button" @click="menuVisible = !menuVisible">
          <md-icon>menu</md-icon>
        </md-button>
        <md-button class = "md-icon-button" @click = 'menuVisible'>
          <router-link to="home"><md-icon >home</md-icon></router-link>

        </md-button>
        <span class="md-title">  {{title}}</span>
      </md-app-toolbar>

      <md-app-drawer :md-active.sync="menuVisible">
        <md-toolbar class="md-transparent" md-elevation="0">Navigation</md-toolbar>

        <md-list>

          <md-list-item>
            <md-button to = '/profile'>
            <md-icon>account_circle</md-icon>
            <span class="md-list-item-text"> My profile</span>
            </md-button>
          </md-list-item>
          <md-list-item>
            <md-button to = 'daily-intake'>
            <md-icon>local_dining</md-icon>
            <span class="md-list-item-text"> Daily intake</span>
            </md-button>
          </md-list-item>

          <md-list-item>
            <md-button>
            <md-icon>trending_up</md-icon>
            <span class="md-list-item-text"> Progress</span>
            </md-button>
          </md-list-item>

          <md-list-item>
            <md-button to = 'friends'>
            <md-icon>supervisor_account</md-icon>
            <span class="md-list-item-text"> Friends</span>
              </md-button>
          </md-list-item>

          <md-list-item>
            <md-button to = "blog" @click = "menuVisible = 'false', title = 'Blog'">
              <md-icon>forum</md-icon>
            <span class="md-list-item-text"> Blog</span>
              </md-button>
          </md-list-item>

          <md-list-item>
            <md-button>
            <md-icon>school</md-icon>
            <span class="md-list-item-text">Achievments</span>
            </md-button>
          </md-list-item>

          <md-list-item>
            <md-button>
            <md-icon>live_help</md-icon>
            <span class="md-list-item-text"> Support</span>
              </md-button>
          </md-list-item>

          <md-list-item>
            <md-button>
            <md-icon>settings</md-icon>
            <span class="md-list-item-text"> Settings</span>
              </md-button>
          </md-list-item>

          <md-list-item>
            <md-button>
            <md-icon>info</md-icon>
            <span class="md-list-item-text"> About</span>
              </md-button>
          </md-list-item>
        </md-list>
      </md-app-drawer>

      <md-app-content md-sync-route>
        <router-view></router-view>


      </md-app-content>
    </md-app>
  </div>
</template>

<script>
export default {
  name: 'app',
  data: () => ({
    menuVisible: false,
    title: 'Home'
  })
}
</script>

<style>
body {
  margin: 0;
}

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

main {
  text-align: center;
}

header {
  margin: 0;
  height: 56px;
  padding: 0 16px 0 24px;
  background-color: #35495E;
  color: #ffffff;
}

header span {
  display: block;
  position: relative;
  font-size: 20px;
  line-height: 1;
  letter-spacing: .02em;
  font-weight: 400;
  box-sizing: border-box;
  padding-top: 16px;
}
#myBar-green {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center; /* To center it horizontally (if you want) */
  line-height: 30px; /* To center it vertically */
  color: white;
}
#myBar-blue {
  width: 100%;
  height: 30px;
  background-color: blue;
  text-align: center; /* To center it horizontally (if you want) */
  line-height: 30px; /* To center it vertically */
  color: white;
}
#myBar-red {
  width: 100%;
  height: 30px;
  background-color: #cc0000 ;
  text-align: center; /* To center it horizontally (if you want) */
  line-height: 30px; /* To center it vertically */
  color: white;
}
</style>
