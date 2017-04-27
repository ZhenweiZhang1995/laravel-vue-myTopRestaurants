<template lang="html">
  <div class="RestaurantForm">
    <p>
      name
    </p>
    <input type="text" v-model="name" />
    <p>
      location
    </p>
    <input type="text" v-model="location" />
    <p>
      phone
    </p>
    <input type="text" v-model="phone" />
    <p>
      price
    </p>
    <input type="text" v-model="price" />
    <p>
      style
    </p>
    <input type="text" v-model="style" />
    <p>
      hours
    </p>
    <input type="text" v-model="hours" />
    <p>
      rating
    </p>
    <input type="text" v-model="rating" />
    <p>
      website
    </p>
    <input type="text" v-model="website" />
    <button class="btn btn-primary" @click="create" :disabled="loading">New Restaurant</button>


    <!-- <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Restaurant name</label>
      </div>
      <div class="field-body">
        <div class="field is-grouped">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="Name" v-model="name">
            <span class="icon is-small is-left">
              <i class="fa fa-cutlery"></i>
            </span>
          </p>
        </div>

      </div>
    </div>


    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Style</label>
      </div>
      <div class="field-body">
        <div class="field is-normal">
          <div class="control">
            <div class="select is-fullwidth">
              <select v-model="style">
                <option>American</option>
                <option>Chinese</option>
                <option>Italian</option>
                <option>Meditarian</option>
                <option>Japanese</option>
                <option>Fast Food</option>
              </select>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Hours</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input" type="text" placeholder="e.g. 10am - 10pm" v-model="hours">
          </div>

        </div>
      </div>
    </div>


    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Location</label>
      </div>
      <div class="field-body">
        <div class="field is-grouped">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="places" v-model="location">
            <span class="icon is-small is-left">
              <i class="fa fa-map-marker"></i>
            </span>
          </p>
        </div>

      </div>
    </div>



    <div class="field is-horizontal">
    <div class="field-label is-normal">
    <label class="label">Price range</label>
    </div>
    <div class="field-body">
    <div class="field is-grouped">
      <p class="control is-expanded has-icons-left has-icons-right">
        <input class="input" type="text" placeholder="10 - 20" value="" v-model="price">
        <span class="icon is-small is-left">
          <i class="fa fa-usd"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>
    <div class="field-label is-normal">
      <label class="label">Telephone</label>
    </div>
    <div class="field">

      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" placeholder="+1 (919) XXX XXXX" v-model="phone">
        <span class="icon is-small is-left">
          <i class="fa fa-phone"></i>
        </span>
      </p>
    </div>
    </div>
    </div>



    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Comment</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <textarea class="textarea" placeholder="How do you like this restaurant?"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label">

      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button class="button is-primary" @click="create" :disabled="loading">
              Post Restaurant
            </button>
          </div>
        </div>
      </div>

    </div> -->
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
      path:'',
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
        website:this.website,
        path:this.path
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
      this.path = '';
    }

  }
};
</script>

<style scoped>
</style>
