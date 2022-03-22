<template>
  <div>
    <!-- START Top Nav / Header Block -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Leyendas De Costa Rica</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Ver leyendas</a>
          <a class="nav-item nav-link" href="#">Agregar leyenda</a>
        </div>
      </div>
    </nav>
    <!-- END Top Nav / Header Block  -->
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
};
</script>
<style lang="scss">

  .main-nav-item{
    display: flex;
  }

  .secondary-nav,
  .secondary-nav .main-nav-item{
    background-color: transparent;
  }

.secondary-nav .main-nav,
.secondary-nav .main-nav-item,
.secondary-nav .main-nav-list{
  height: 44px;
}

.secondary-nav .main-nav-item{
    align-items: center;
}

.secondary-nav .main-nav-link:hover, 
.secondary-nav .active{
  background-color: transparent;
  border-bottom: 1px #EFB5D6 solid;
}
</style>