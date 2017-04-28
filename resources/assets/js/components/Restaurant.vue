<template lang="html">
  <div class="Restaurant panel panel-default">
    <!-- <h1>Upload your favourite restaurant</h1> -->

    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          {{ restaurant.name }}
        </p>
        <a class="card-header-icon">
          <span class="icon">
            <i class="fa fa-angle-down"></i>
          </span>
        </a>
      </header>
    <div class="card-content">
      <div class="content">
        <p><b>Style: </b>{{ restaurant.style }}</p>
        <p><b>Hours: </b>{{ restaurant.hours }}</p>
        <p><b>Price: </b>{{ restaurant.price }}</p>
        <p><b>Location: </b>{{ restaurant.location }}</p>
        <p><b>Telephone: </b> <a href="'tel:' + restaurant.phone">{{ restaurant.phone }}</a> </p>
        <p><b>Website: </b>{{ restaurant.website }}</p>

        <iframe
        width="600" height="450" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBHe3uOWBYiKpzlfrUMoRtqqerXHuoYfkQ
        &q=Space+Needle,Seattle+WA" allowfullscreen>
        </iframe>


        <a>#{{ restaurant.style }}</a>. <a>#{{ restaurant.location }}</a>
        <br>
        <small>Open Hours: {{ restaurant.hours }}</small>
      </div>
    </div>
    <footer class="card-footer">
      <a class="card-footer-item">Edit</a>
      <a class="card-footer-item">Delete</a>
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
      loading: false
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

</style>
