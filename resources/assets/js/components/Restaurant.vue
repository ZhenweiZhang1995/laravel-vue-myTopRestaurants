<template lang="html">
  <div class="Restaurant panel panel-default">
    <!-- <h1>Upload your favourite restaurant</h1> -->

    <div class="card">
      <header class="card-header">
        <h1 class="card-header-title" v-show="!editing">
          {{ restaurant.name }}
        </h1>
        <h1 class="card-header-title" v-show="editing">
          <input class="input" type="text" v-model="name" />
        </h1>
        <a class="card-header-icon" v-show="!editing">
          <a>#{{ restaurant.style }}</a> &nbsp &nbsp <a>#{{ restaurant.location }}</a>
        </a>
      </header>
    <div class="card-content">
      <div class="content">

        <!-- viewing mode -->
        <div class="columns is-mobile" v-show="!editing">
          <div class="column">
            <p><b>Style: </b>{{ restaurant.style }}</p>
            <p><b>Hours: </b>{{ restaurant.hours }}</p>
            <p><b>Telephone: </b> <a href="'tel:' + restaurant.phone">{{ restaurant.phone }}</a> </p>
            <p><b>Website: </b>{{ restaurant.website }}</p>
          </div>
          <div class="column">
            <form>
              <Rating :items="items" :value="rating"></Rating>
            </form>
            <p><b>Price Range: </b>{{ restaurant.price }}</p>
            <p><b>Location: </b>{{ restaurant.location }}</p>
          </div>
        </div>

        <!-- editting mode -->
        <div class="columns is-mobile" v-show="editing">
          <div class="column">
            <p><b>Style: </b>
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
            </p>
            <p><b>Hours: </b><input class="input" type="text" v-model="hours" /></p>
            <p><b>Telephone: </b> <input class="input" type="text" v-model="phone" /> </p>
            <p><b>Website: </b><input class="input" type="text" v-model="website" /></p>
          </div>
          <div class="column">
            <form>
              <Rating :items="items" :value="rating" @change="updateStar"></Rating>
            </form>
            <p><b>Price Range: </b><input class="input" type="text" v-model="price" /></p>
            <p><b>Location: </b><input class="input" type="text" v-model="location" /></p>
          </div>
        </div>

        <iframe
        width="300" height="225" frameborder="0" style="border:0"
        :src="'https://www.google.com/maps/embed/v1/place?key=AIzaSyBHe3uOWBYiKpzlfrUMoRtqqerXHuoYfkQ&q='+ restaurant.location" allowfullscreen>
        </iframe>

        <br>


      </div>


    </div>
    <footer class="card-footer">

      <a class="card-footer-item" @click.prevent="remove">Remove</a>
      <a class="card-footer-item" @click.prevent="editing = true" v-show="!editing">Edit</a>
      <a class="card-footer-item" @click="save" v-show="editing">Save</a>
      <a class="card-footer-item" @click="cancel">Cancel</a>
    </footer>
</div>




  </div>
</template>

<script>
import axios from 'axios';
import Rating from 'vue-bulma-rating';
export default {
  components: {
    Rating
  },
  props: [
    'restaurant'
  ],

  data () {
    return {
      name: this.restaurant.name,
      location: this.restaurant.last,
      phone: this.restaurant.phone,
      price: this.restaurant.price,
      style: this.restaurant.style,
      hours: this.restaurant.hours,
      rating: this.restaurant.rating,
      website: this.restaurant.website,
      loading: false,
      editing: false,
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

  methods: {

    remove () {
      console.log('Restaurant -> remove');
      this.loading = true;
      axios.delete(`/restaurants/${this.restaurant.id}`)
        .then((response) => {
          console.log('Restaurant -> remove success');
          this.$emit('deleted')
          this.loading = false;
        })
        .catch((error) => {
          console.log('Restaurant -> remove error');
          // stop deleting and dont remove from the dom
          // tell the user deletion failed
        });
    },

    save () {
      console.log('Restaurant -> save');
      axios.put(`/restaurants/${this.restaurant.id}`, {
        name: this.name,
        location: this.location,
        phone: this.phone,
        price: this.price,
        hours: this.hours,
        rating: this.rating,
        website: this.website
        })
        .then((response) => {
          console.log('Restaurant -> save success');
          this.$emit('updated', {
            restaurant: this.restaurant,
            name: this.name,
            location: this.location,
            phone: this.phone,
            price: this.price,
            hours: this.hours,
            rating: this.rating,
            website: this.website
          });
          this.editing = false;
        })
        .catch((error) => {
          this.editing = false;
          console.log('Restaurant -> save error');
          //show the user that it couldn't be updated
        });
    },

    cancel () {
      console.log('Restaurant -> cancel');
      this.name = this.restaurant.name;
      this.location = this.restaurant.location;
      this.phone = this.restaurant.phone;
      this.price = this.restaurant.price;
      this.style = this.restaurant.style;
      this.hours = this.restaurant.hours;
      this.rating = this.restaurant.rating;
      this.website = this.restaurant.website;
      this.editing = false;
    },
    updateStar (val) {
      this.rating = val
    }

  }


}
</script>

<style lang="css">
  .Restaurant{
    width: 80%;
    margin-left: 10%;
  }

  h1{
    text-align: center;
    font-weight: bolder;
    font-size: 120%;
  }

  a{
    color: #3273dc;
  }

  iframe{
    max-width: 100%;
  }

  card-header-title{
    margin-left: 5%;
  }

  input:focus {
    border: 1px solid #3273dc;
  }

  select:focus{
    border: 1px solid #3273dc;
  }
</style>
