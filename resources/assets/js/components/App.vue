<template lang="html">
<div>
   <div class="container">

     <RestaurantForm @created="fetch"></RestaurantForm>
     <br>
     <div class="RestaurantList" v-show="restaurants.length > 0">
       <Restaurant v-for="(newRest, index) in restaurants" :key="index" :restaurant="newRest" @updated="update" @deleted="remove(index)"></Restaurant>
     </div>
     <!-- <Restaurant></Restaurant> -->
   </div>
   <Vuefooter></Vuefooter>
 </div>
</template>

<script>
import axios from 'axios';
import Restaurant from './Restaurant';
import RestaurantForm from './RestaurantForm';
import Vuefooter from './Vuefooter';

export default {
  components: {
    Restaurant,
    RestaurantForm,
    Vuefooter
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
