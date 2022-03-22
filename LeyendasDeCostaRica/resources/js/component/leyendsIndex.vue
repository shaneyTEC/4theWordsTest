<template>
    <div>
      <!--<app-nav></app-nav>-->
      <div class="container">
        <div class="row">
          <app-add-leyend-form></app-add-leyend-form>
          <app-leyend-list></app-leyend-list>
        </div>
      </div>
    </div>

</template>

<script>
import Nav from './nav.vue';
import AddLeyend from './leyend/addleyend.vue';
import leyendsList from './leyend/leyendsList.vue';
export default {
  data() {
    return {
    };
  },
  components:{
    'app-add-leyend-form': AddLeyend,
    'app-leyend-list': leyendsList,
    'app-nav': Nav 
  }
};
</script>

<style lang="scss">

*, ::after, ::before {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

img {
    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
    max-width: 100%;
    max-height: 1000%;
}

.card-small{
  width: 45%;
}

button, .button{
    text-decoration: none;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    background-color: #000000;
    color: white;
  }

.cards{
  display: flex;
  gap: 15px;
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.card-title {
    margin-left: 0.75rem;
}

.container {
    max-width: 70rem;
    margin-right: auto;
    margin-left: auto;
}
</style>