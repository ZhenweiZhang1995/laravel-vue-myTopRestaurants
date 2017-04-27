<template lang="html">
  <div class="hero">
      <section class="hero is-primary is-large header-image">
        <div class="hero-head">
          <header class="nav">
            <div class="container">
              <div class="nav-left">
                <a class="nav-item" href="../index.html">
                  <img src="../image/bulma-white.png" alt="Logo">
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
                  Examples
                </a>
                <a class="nav-item">
                  Documentation
                </a>
                <span class="nav-item">
                  <a class="button is-info is-outlined is-inverted">
                    <span class="icon">
                      <i class="fa fa-github"></i>
                    </span>
                    <span>Download</span>
                  </a>
                </span>
              </div>
            </div>
          </header>
        </div>
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="title is-2">
              Hero Heading
            </h1>
            <h2 class="subtitle is-5">
              A hero description could go here.
            </h2>
            <p>
              <a class="button is-outlined">
                <span class="icon">
                  <i class="fa fa-download"></i>
                </span>
                <span>
                  Download
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
                  <p class="has-text-centered"><i class="fa fa-camera-retro icon-block"></i></p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                  <br>
                  <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p>
                </div>
              </div>
            </div>
            <div class="column is-4">
              <div class="panel">
                <div class="panel-block section">
                  <p class="has-text-centered"><i class="fa fa-bar-chart icon-block"></i></p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                  <br>
                  <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p>
                </div>
              </div>

            </div>
            <div class="column is-4">
              <div class="panel">
                <div class="panel-block section">
                  <p class="has-text-centered"><i class="fa fa-cloud icon-block"></i></p>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                  <br>
                  <p class="has-text-centered"><a class="button is-info is-outlined">Action</a></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>



      <footer class="footer">
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
      </footer>
  </div>

</template>

<script>

export default {
}
</script>

<style lang="css">
.header-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.49),rgba(0, 0, 0, 0.89)),url('https://images.unsplash.com/1/iphone-4-closeup.jpg?dpr=1&auto=format&crop=middle&fit=crop&w=2000&h=700&q=80');
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
.section.main {
  background-color:#F0F0F0;
}
.icon-block {
  font-size:5em;
}
</style>
