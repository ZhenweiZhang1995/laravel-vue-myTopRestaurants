<template lang="html">
 <div class="container">

   <!-- <div class="tabs">
<ul>
<li class="is-active"><a>Pictures</a></li>
<li><a>Music</a></li>
<li><a>Videos</a></li>
<li><a>Documents</a></li>
</ul>
</div> -->

   <RestaurantForm @created="fetch"></RestaurantForm>
 </div>
</template>

<script>
import axios from 'axios';
// import Restaurant from './Restaurant';
import RestaurantForm from './RestaurantForm';
// import Ratinga from './Ratinga';

export default {
  components: {
    // Restaurant,
    RestaurantForm
    // Ratinga
  },

  data () {
    return {
      restaurants: [],
      loading: false
    }
  },

  mounted () {
    this.fetch();
  },

  methods: {

    fetch () {
      console.log('App -> fetch');
      this.loading = true;
      axios.get('/restaurants')
        .then((response) => {
          console.log('App -> fetch success');
          console.log(response.data);
          this.restaurants = response.data;
          this.loading = false;
        })
        .catch((response) => {
          console.log('App -> fetch error');
          // show error
          this.loading = false;
        })
    },

    update (data) {
      var i = this.restaurants.indexOf(data.restaurant);
      for (var d in data) {
        this.restaurants[i][d] = data[d];
      }
    },

    remove (i) {
      console.log(`App -> remove ID: ${i}`);
      this.restaurants.splice(i, 1);
    }

  }

}
</script>

<style lang="css">
</style>
