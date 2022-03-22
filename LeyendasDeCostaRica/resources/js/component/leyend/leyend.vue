<template>
  <div class="card card-small">
    <!-- START See Leyend Details / Content Block -->

    <label for="id" class="field-label invisible">{{ objLeyend.id }}</label>
    <h3 class="card-title">Detalles de la leyenda "{{ objLeyend.name }}"</h3>
    <img :src="objLeyend.image_url" class="card-img-top" />
    <div class="card-body">
      <div id="list">
        <div id="ship">
          <p id="ship-title">Provincia de origen:</p>
          <p v-if="objLeyend.location === 1" class="ship-blue">Limón</p>
          <p v-if="objLeyend.location === 2" class="ship-purple">San José</p>
          <p v-if="objLeyend.location === 3" class="ship-red">Alajuela</p>
          <p v-if="objLeyend.location === 4" class="ship-periwinkle">Cartago</p>
          <p v-if="objLeyend.location === 5" class="ship-yellow">Heredia</p>
          <p v-if="objLeyend.location === 6" class="ship-orange">Puntarenas</p>
          <p v-if="objLeyend.location === 7" class="ship-green">Guanacaste</p>
        </div>
      </div>
      <p>{{ objLeyend.description }}</p>
      <div class="panel-footer">
        <button href="" @click="onEdit">Editar</button>
        <button href="" @click="onDelete(objLeyend.id)">Eiminar</button>
      </div>
    </div>
    <!-- END See Leyend Details / Content Block -->
  </div>
</template>
<script>
export default {
  props: ["objLeyend"],
  methods: {
    onEdit() {
      console.log("editar");
    },
    onDelete(id) {
      axios.delete("api/leyend/" + id + "/delete")
          .then((response) => console.log(response))
          .catch((error) => console.log(error));
    },
  },
};
</script>

<style lang="scss">
.card-img-top {
  margin-bottom: 15px;
  width: 100%;
  height: 25vw;
  object-fit: cover;
}

.invisible {
  visibility: hidden;
}

#ship {
  display: flex;
  flex: 1;
  display: inline-flex;
  flex-wrap: wrap;
  gap: 10px;
  max-width: calc(50% + var(--gap));
  margin-bottom: 10px;
}

#ship p {
  padding-left: 5px;
  padding-right: 5px;
  margin-top: 0px;
  margin-bottom: 0px;
  border-radius: 15px;
  font-weight: bolder;
  text-align: center;
}

#ship-title {
  padding-left: 0px !important;
}

.ship-green,
.ship-red,
.ship-yellow,
.ship-blue,
.ship-periwinkle,
.ship-purple,
.ship-orange {
  font-size: 12px;
}

.ship-green {
  background-color: #d5f89c;
}

.ship-green:hover {
  background-color: #a2c172;
}

.ship-red {
  background-color: #fda09f;
}

.ship-red:hover {
  background-color: #c57474;
}

.ship-yellow {
  background-color: #faf38e;
}

.ship-yellow:hover {
  background-color: #c2bc5f;
}

.ship-blue {
  background-color: #ade9df;
}

.ship-blue:hover {
  background-color: #7db7ae;
}

.ship-periwinkle {
  background-color: #9fa7fc;
}

.ship-periwinkle:hover {
  background-color: #6c74c3;
}

.ship-purple {
  background-color: #bca5bd;
}

.ship-purple:hover {
  background-color: #947395;
}

.ship-orange {
  background-color: #f5b876;
}

.ship-orange:hover {
  background-color: #c28b51;
}
</style>