<template lang="html">
  <div class="Restaurant panel panel-default">
    <p>
      Hi this is restaurant.vue
    </p>
  </div>
</template>

<script>
import axios from 'axios';
export default {
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

</style>
