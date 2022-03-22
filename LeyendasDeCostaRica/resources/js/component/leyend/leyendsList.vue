<template>
  <div id="leyends-list-section">
    <div>
      <div class="form-group">
        <input type="text" v-model="search" placeholder="Buscar leyenda" />
      </div>
    </div>
    <!-- START See Leyend Details / Content Block -->
    <main class="content leyends-list">
      <div class="cards">
        <app-leyend-Detail
          v-for="leyend in filterLeyends"
          :key="leyend.id"
          v-bind:obj-leyend="leyend"
        ></app-leyend-Detail>
      </div>
    </main>
    <!-- END See Leyend Details / Content Block -->
  </div>
</template>
<script>
import axios from "axios";
import leyendDetails from "./leyend.vue";
export default {
  data() {
    return {
      leyends: [],
      locations: [],
      search: "",
    };
  },
  components: {
    "app-leyend-Detail": leyendDetails,
    "app-leyend-Detail": leyendDetails,
  },
  mounted() {
    axios
      .get("api/leyends")
      .then((res) => {
        this.leyends = res.data.leyends.original.leyends;
      })
      .catch((err) => {
        console.error(err);
      });
    axios
      .get("api/locations")
      .then((res) => {
        this.locations = res.data.locations.original.locations;
      })
      .catch((err) => {
        console.error(err);
      });
  },
  computed:{
    filterLeyends: function (){
      return this.leyends.filter((leyend) =>{
        return leyend.name.match(this.search) 
        || leyend.description.match(this.search);
      })
    }
  }
};
</script>

<style lang="scss">
#leyends-list-section .leyends-list,
#load-leyends {
  margin-top: 15px;
}
</style>