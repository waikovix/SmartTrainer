<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{asset('manifest.json')}}">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="Smart Trainer">
<meta name="apple-mobile-web-app-title" content="Smart Trainer">
<meta name="theme-color" content="#0040FF">
<meta name="msapplication-navbutton-color" content="#0040FF">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-starturl" content="/home">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="image/png" sizes="746x746" href="{{asset('photos/logo.png')}}">
<link rel="apple-touch-icon" type="image/png" sizes="746x746" href="{{asset('photos/logo.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Trainer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
</head>
<body>
    <div id="app">
    <div class="page-container">
    <md-app md-mode="reveal">
      <md-app-toolbar class="md-primary">
        <md-button class="md-icon-button" @click="menuVisible = !menuVisible">
          <md-icon>menu</md-icon>
        </md-button>
        <a href="/home">
        <md-button class = "md-icon-button" @click = 'menuVisible'>
         <md-icon >home</md-icon>

        </md-button>
        </a>
        <span class="md-title">@yield('title')</span>
        @yield('addons')

      </md-app-toolbar>

      <md-app-drawer :md-active.sync="menuVisible">
        <md-toolbar class="md-transparent" md-elevation="0">Navigation</md-toolbar>

        <md-list>

          <md-list-item>
          <a href="/profile">
            <md-button>
            <md-icon>account_circle</md-icon>
            <span class="md-list-item-text">My profile</span>
            </md-button>
            </a>
          </md-list-item>
          <md-list-item>
          <a href="/daily-intake">
            <md-button >
            <md-icon>local_dining</md-icon>
            <span class="md-list-item-text"> Daily intake</span>
            </md-button>
            </a>
          </md-list-item>

          <md-list-item>
          <a href ="/progress">
            <md-button>
            <md-icon>trending_up</md-icon>
            <span class="md-list-item-text"> Progress</span>
            </md-button>
            </a>
          </md-list-item>

          <md-list-item>
          <a href = "/friends">
            <md-button to = 'friends'>
            <md-icon>supervisor_account</md-icon>
            <span class="md-list-item-text"> Friends</span>
              </md-button>
              </a>
          </md-list-item>

          <md-list-item>
          <a href = "/blog">
            <md-button @click = "menuVisible = 'false', title = 'Blog'">
              <md-icon>forum</md-icon>
            <span class="md-list-item-text"> Blog</span>
              </md-button>
              </a>
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

      <md-app-content>
        @yield('content')


      </md-app-content>
    </md-app>
  </div>
    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
     <script>
    if (navigator.serviceWorker.controller) {
    	  console.log('[PWA Builder] active service worker found, no need to register')
    	} else {
    	  //Register the ServiceWorker
    	  navigator.serviceWorker.register("{{asset('pwabuilder-sw.js')}}", {
    	    scope: './'
    	  }).then(function(reg) {
    	    console.log('Service worker has been registered for scope:'+ reg.scope);
    	  });
    	}
    </script>


    @yield('scripts')

    @yield('style')
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
a {
   color:black;
   text-decoration:none;
}
.md-app-content{
  min-height:570px;
}
</style>

</body>
</html>
