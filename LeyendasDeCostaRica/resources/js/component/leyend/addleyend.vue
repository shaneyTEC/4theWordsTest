<template>
  <!-- START ADD Leyend Form / Content Block -->
  <div id="form-new-leyend">
    <div class="card card-center">
      <div class="card-body">
        <form @Submit.prevent="onSubmitted">
          
        <legend>Crear leyenda</legend>
          <div class="form-group">
            <label for="name" class="field-label">Título: </label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control"
              v-model="name"
              :required="!name"
            />
          </div>

          <div class="form-group">
            <label for="image_url" class="field-label"
              >URL de la imagen de refrencia:
            </label>
            <input
              type="text"
              name="image_url"
              id="image_url"
              class="form-control"
              v-model="image_url"
              :required="!image_url"
            />
          </div>

          <app-locations-list> </app-locations-list>

          <div class="form-group">
            <label for="description" class="field-label">Descripción:</label>
            <textarea
              name="description"
              id="description"
              rows="10"
              class="form-control"
              v-model="description"
              :required="!description"
            ></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Editar leyenda</button>
          <button type="submit" class="btn btn-primary">Agregar leyenda</button>
        </form>
      </div>
    </div>
  </div>
  <!-- END ADD Leyend Form / Content Block -->
</template>

<script>
import axios from "axios";
import locationList from "../location/locations.vue";
export default {
  props: ["selected"],
  /*para poder acceder a la informacion desde aqui.. 
  uso el props? o hago referencia de el en locations list(donde se despliega)*/
  data() {
    return {
      name: '',
      image_url: '',
      description: '',
      location: 1,
      leyend: []
    };
  },
  components: {
    "app-locations-list": locationList,
  },
  methods: {
    onSubmitted() {
      this.leyend = (this.name, this.image_url, this.description, this.location);      
      axios.post("api/leyend", 
      {leyend: this.leyend
          .then((response) => console.log(response))
          .catch((error) => console.log(error))}
      );
    },    
    onEdit() {
      this.leyend = (this.name, this.image_url, this.description, this.location);      
      axios.post("api/leyend/" + id + "/edit", 
      {leyend: this.leyend
          .then((response) => console.log(response))
          .catch((error) => console.log(error))}
      );
    },
  },
};
</script>
<style lang="scss">
#form-new-leyend {
  display: flex;
  justify-content: center;
  margin: 15px;
  form {
    min-width: 50rem;
  }
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 16px;
}

.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}
legend {
    font-size: 1.5rem;
}
legend {
    padding: 0px;
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + .3vw);
    line-height: inherit;
    display: block;
    padding-inline-start: 2px;
    padding-inline-end: 2px;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
}
</style>