<template lang="html">
  <div class="RestaurantForm">

    <div class="field is-horizontal">
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
                <option value="Ameircan">American</option>
                <option value="Chinese">Chinese</option>
                <option value="Italian">Italian</option>
                <option value="Meditarian">Meditarian</option>
                <option value="Japanese">Japanese</option>
                <option value="Fast Food">Fast Food</option>
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


    <!-- rating part -->
    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Rating</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <div class="Ratinga">
              <form>
                <Rating kind="grow" :items="items" :value="rating" @change="updateStar"></Rating>
              </form>
            </div>
          </div>
        </div>
        <div class="field-label is-normal">
          <label class="label">Website</label>
        </div>
        <div class="field">

          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="www.google.com" v-model="website">
            <span class="icon is-small is-left">
              <i class="fa fa-home"></i>
            </span>
          </p>
        </div>
      </div>
    </div>



    <!-- comment part -->
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

    <!-- submit button -->
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

    </div>


  </div>
</template>

<script>
import axios from 'axios';
import Rating from 'vue-bulma-rating';

//no loader yet


export default {
  components: {
    Rating
  },

  data(){
    return{
      name:'',
      location:'',
      phone:'',
      price:'',
      style:'',
      hours:'',
      rating: 2,
      website:'',
      // path:'',
      loading:false,
      items: [
        {
          title: '5 Stars',
          value: 5
        },
        {
          title: '4 Stars',
          value: 4
        },
        {
          title: '3 Stars',
          value: 3
        },
        {
          title: '2 Stars',
          value: 2
        },
        {
          title: '1 Star',
          value: 1
        }
      ]
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
        // path:this.path
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
      // this.path = '';
    },
    updateStar (val) {
      this.rating = val
    }

  }
};
</script>

<style scoped>
</style>
