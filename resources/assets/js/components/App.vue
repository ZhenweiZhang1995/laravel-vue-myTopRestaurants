<template lang="html">
<div>
  <Hero></Hero>
   <div class="container">

     <RestaurantForm @created="fetch"></RestaurantForm>
     <br>
     <br>

     <div class="RestaurantList" v-show="restaurants.length > 0">
       <h1>Restaurant List</h1>
       <br>
       <Restaurant v-for="(newRest, index) in restaurants" :key="index" :restaurant="newRest" @updated="update" @deleted="remove(index)"></Restaurant>
     </div>
   </div>
   <Vuefooter></Vuefooter>
 </div>
</template>

<script>
import axios from 'axios';
import Restaurant from './Restaurant';
import RestaurantForm from './RestaurantForm';
import Vuefooter from './Vuefooter';
import Hero from './Hero';

export default {
  components: {
    Restaurant,
    RestaurantForm,
    Vuefooter,
    Hero
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
        if (d === 'restaurant') continue;
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
.RestaurantList{
  padding-top: 20px;
}
Restaurant{
  padding-top: 3%;
}
</style>
