<!--Barra de navegación-->
<nav class="navbar navbar-expand-lg bg-body-black">
  <div class="container-fluid">
	 <div class="navbar-header">
		<a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
		    <!--Logo/Marca de la empresa-->
			 <img src="<?php echo base_url('assets/img/logoempresa.jpg')?>" class="logo" alt="marca"
			 width="100" height="100"  class="img-fluid"/>
			 </a>
			 </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='acercade'>Acerca de</a>
        </li>
		<li class="nav-item">
			<a class="nav-link" href='catalogo'>Catálogo</a>
			</li>
		<li class="nav-item">
			<a class="nav-link" href='registro'>Registrarse</a>
			</li>
		<li class="nav-item">
			<a class="nav-link" href='login'>Login</a>
			</li>
		</ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--Fin Barra de Navegación-->