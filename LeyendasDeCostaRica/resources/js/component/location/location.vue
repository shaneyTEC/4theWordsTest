<template>
  <!-- START See Location Details / Content Block -->
  <option :value="objLocation.id">{{ objLocation.name }}</option>
  <!-- END See Leyend Details / Content Block -->
</template>

<script>
export default {
 props: ['objLocation']
};
</script>