<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rate Restaurants</title>
    </head>
    <body>

      <div class="hero">
          <section class="hero is-info is-medium header-image">
            <div class="hero-head">
              <header class="nav">
                <div class="container">
                  <div class="nav-left">
                    <a class="nav-item" href="">
                      <span>Rate Local Restaurants</span>
                    </a>
                  </div>
                  <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                  <div class="nav-right nav-menu">
                    <a class="nav-item is-active">
                      Home
                    </a>
                    <a class="nav-item">
                      Style Guide
                    </a>
                    <a class="nav-item">
                      Documentation
                    </a>
                    <span class="nav-item">
                      <a class="button is-info is-outlined is-inverted">
                        <span class="icon">
                          <i class="fa fa-github"></i>
                        </span>
                        <span>My Github</span>
                      </a>
                    </span>
                  </div>
                </div>
              </header>
            </div>
            <div class="hero-body">
              <div class="container has-text-centered">
                <h1 class="title is-2">
                  Rate Restaurants
                </h1>
                <h2 class="subtitle is-5">
                  Upload and Rate your favourite restaurant
                </h2>
                <p>
                  <a class="button is-outlined is-info is-inverted">
                    <span>
                      Get Started
                    </span>
                  </a>
                </p>
              </div>
            </div>
          </section>

          <div class="section main">
            <div class="container">
              <div class="columns">
                <div class="column is-4">
                  <div class="panel">
                    <div class="panel-block section">
                      <p class="has-text-centered"><i class="fa fa fa-camera-retro fa-4x icon-block"></i></p>
                      <br>
                      <p> Post your favourite restaurant</p>
                      <br>
                      <!-- <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p> -->
                    </div>
                  </div>
                </div>
                <div class="column is-4">
                  <div class="panel">
                    <div class="panel-block section">
                      <p class="has-text-centered"><i class="fa fa-bar-chart fa-4x icon-block"></i></p>
                      <br>
                      <p> Have your own custom restaurant list</p>
                      <br>
                    </div>

                  </div>

                </div>
                <div class="column is-4">
                  <div class="panel">
                    <div class="panel-block section">
                      <p class="has-text-centered"><i class="fa fa-cloud fa-4x icon-block"></i></p>
                      <br>
                      <p>Edit or Delete as you wish</p>
                      <br>
                      <!-- <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p> -->
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>



          <!-- <footer class="footer">
            <div class="container">
              <div class="content has-text-centered">
                <p>
                  <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                  <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                  is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
                </p>
                <p>
                  <a class="icon" href="https://github.com/jgthms/bulma">
                    <i class="fa fa-github"></i>
                  </a>
                </p>
              </div>
            </div>
          </footer> -->
      </div>


        <div id="app"></div>


        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
        <link rel="stylesheet" href="/css/hero.css" media="screen" title="no title">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
