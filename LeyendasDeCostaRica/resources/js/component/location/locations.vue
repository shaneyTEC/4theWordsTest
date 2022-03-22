<template>
  <!-- START See Location Details / Content Block -->
  <div class="form-group">
    <label for="location" class="field-label">Provincia de origen: </label>
    <select
      size="1"
      name="location"
      id="location"
      class="form-control"
      v-model="selected"
      :required="!selected">
      <option disabled value="">Por favor seleccione una provincia</option>
      <app-location-Detail 
      v-for="location in locations" :key="location.id"
      v-bind:obj-location=location>
      </app-location-Detail>
    </select>
  </div>
  <!-- END See location Details / Content Block -->
</template>
<script>
import axios from "axios";
import locationDetails from "./location.vue";
export default {
  data() {
    return {
      locations: [],
      selected: ''
    };
  },
  components: {
    "app-location-Detail": locationDetails,
  },
  mounted() {
    axios.get("api/locations")
      .then((res) => {
        this.locations = res.data.locations.original.locations;
      })
      .catch((err) => {
        console.error(err);
      });
  },
};
</script>