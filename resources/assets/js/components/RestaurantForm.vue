<template lang="html">
  <div class="RestaurantForm">
    <input type="text" v-model="name" />
    <input type="text" v-model="location" />
    <input type="text" v-model="phone" />
    <input type="text" v-model="price" />
    <input type="text" v-model="style" />
    <input type="text" v-model="hours" />
    <input type="text" v-model="rating" />
    <input type="text" v-model="website" />
    <!-- <input type="checkbox" v-model="favorite" /> -->
    <button class="btn btn-primary" @click="create" :disabled="loading">New Restaurant</button>
  </div>
</template>

<script>
import axios from 'axios';
//no loader yet


export default {
  data(){
    return{
      name:'',
      location:'',
      phone:'',
      price:'',
      style:'',
      hours:'',
      rating:'',
      website:'',
      loading:false
    }
  },
  methods:{
    create () {
      console.log('RestaurantForm -> create');
      if (this.loading) {
        alert('request is already being made');
        return false;
      }
      this.loading = true;
      this.sendRequest();
    },
    sendRequest () {
      axios.post('/restaurants', {
        name: this.name,
        location:this.location,
        phone:this.phone,
        price:this.price,
        style:this.style,
        hours:this.hours,
        rating:this.rating,
        website:this.website
      })
      .then((response) => {
        console.log('RestaurantForm -> sendRequest success');
        console.log(response.data);
        this.loading = false;
        this.reset();
        this.$emit('created');
      })
      .catch((error) => {
        console.error('RestaurantForm -> sendRequest error');
        // show an error message
      });
    },
    reset () {
      this.name = '';
      this.location = '';
      this.phone = '';
      this.price = '';
      this.style = '';
      this.hours = '';
      this.rating = '';
      this.website = '';
    }

  }
}
</script>

<style scoped>
</style>
