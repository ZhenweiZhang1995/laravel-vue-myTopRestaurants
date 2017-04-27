<template lang="html">
  <div class="Restaurant panel panel-default">
    <h1>Upload your favourite restaurant</h1>


<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Restaurant name</label>
  </div>
  <div class="field-body">
    <div class="field is-grouped">
      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" placeholder="Name" v-model="name" ／>
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
        <input class="input" type="text" placeholder="e.g. 10am - 10pm" v-model="hours" ／>
      </div>
      <!-- <p class="help is-danger">
        This field is required
      </p> -->
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
        <input class="input" type="text" placeholder="places" v-model="location" ／>
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
    <input class="input" type="text" placeholder="10 - 20" value="" v-model="price" ／>
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
    <input class="input" type="text" placeholder="+1 (919) XXX XXXX" v-model="phone" ／>
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
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <button class="button is-primary" @click="create" :disabled="loading" ／>
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
