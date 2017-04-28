<template lang="html">
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
                <a href="/style" class="nav-item">
                  Style Guide
                </a>
                <a href="https://zhenweizhang1995.gitbooks.io/rate-restaurant-api/content/" class="nav-item">
                  API Documentation
                </a>


                <span class="nav-item">
                  <a href="https://github.com/ZhenweiZhang1995" class="button is-info is-outlined is-inverted">
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
              Post and Rate your favourite restaurant
            </h2>
            <p>
              <a href="#restaurant" class="button is-outlined is-info is-inverted">
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
                  <p> &nbsp &nbsp Post your favourite restaurant</p>
                  <br>
                  <!-- <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p> -->
                </div>
              </div>
            </div>
            <div class="column is-4">
              <div class="panel">
                <div class="panel-block section">
                  <p class="has-text-centered"><i class="fa fa-list fa-4x icon-block"></i></p>
                  <br>
                  <p> &nbsp &nbsp Have your custom restaurant list</p>
                  <br>
                </div>

              </div>

            </div>
            <div class="column is-4">
              <div class="panel">
                <div class="panel-block section">
                  <p class="has-text-centered"><i class="fa fa-map fa-4x icon-block"></i></p>
                  <br>
                  <p>&nbsp &nbsp Get address on Google Map</p>
                  <br>
                  <!-- <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p> -->
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
/*body {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
}*/
.header-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.49),rgba(0, 0, 0, 0.89)),url('/images/food2.png');
}
.is-outlined {
  background-color:transparent;
  color:#fff;
}
.hero-cta {
  padding: 30px 0;
}
.panel-block.section p {
  font-size: 17px;
  line-height: 1.4;
  color:#95A5A6;
}
/*.section.main {
  background-color:#F0F0F0;
}*/
.icon-block {
  font-size:5em;
}


</style>
