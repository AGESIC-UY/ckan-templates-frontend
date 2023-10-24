<!-- Adaptación de header-catalogo.php al formato de Catálogo de Datos Abiertos-->
<header class="Header Header--minisitio Header--catalogo"> 
  <div class="Header-top">
    <div class="Container">
      
			<div class="Header-site">
        <div class="u-relative u-inlineBlock">
          <a class="Header-mainLink" href="./">
            <span class="Brand Brand--sm">
              <span class="Brand-text">gub.uy</span>
            </span>
          </a>
        </div>
				
				<div class="Header-parent">
          <a href="https://www.gub.uy/datos-estadisticas">Datos y estadísiticas</a>
        </div>
				
      </div>

      <div class="Header-login">
				<?php if (isset($_GET['user'])) : ?>
        
				<!-- Menú desplegable de usuario -->
  			<?php include "inc/dropdown-user.php"; ?>
				
        <?php else: ?>
					<a href="?user">Iniciar sesión</a>	
        <?php endif; ?>
			</div>	

    </div>
  </div>
	
  <div class="Header-body">
    <div class="Container">
      <div class="Header-logo u-md-size1of3 u-size3of4">
        <a href="./">
          <div class="Logo">
            <!--<img class="Logo-image" src="./assets/escudo-blanco.svg" alt="">-->
            <div class="Logo-text">
              <h1 class="Logo-title">
								<span class="Logo-role">Catálogo de</span>
								<span>Datos Abiertos</span>
							</h1>
            </div>
          </div>
        </a>
      </div>

      <button class="Header-menuTrigger js-menuTrigger u-md-hide">
        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
        </svg>
        <span>Menú</span>
      </button>

      <div class="Header-search">
        <div class="Search">
          <form action="./">
            <label for="search" class="u-hideVisually">Buscar:</label>
            <input id="search" class="Search-input" type="search" placeholder="Buscar en el Catálogo" />
            <button class="Search-button">Buscar</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</header>

<nav class="Nav js-mainNav" id="menu">
  <div class="Container">
    <ul class="Nav-list">
      <li class="Nav-item">
        <a href="cda-listado-conjuntos.php" id="item-1">Conjuntos de Datos</a>
      </li>
      <li class="Nav-item">
        <a href="cda-listado-publicadores.php" id="item-2">Publicadores</a>
      </li>
      <li class="Nav-item">
        <a href="cda-listado-categorias.php" id="item-3">Categorías</a>
      </li>
      <li class="Nav-item">
        <a href="cda-listado-aplicaciones.php" id="item-4">Aplicaciones y uso de datos</a>
      </li>
      <li class="Nav-item">
        <a href="#" id="item-5">Sobre el Catálogo</a>
        <div class="Nav-subnav">
          <ul>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Centro de recursos</a></li>
						<li><a href="#">Panel de estadísticas</a></li>
            <li><a href="#">Novedades</a></li>
            <li><a href="#">Preguntas frecuentes</a></li>
            <li><a href="#">Ayudanos a mejorar</a></li>
            <li><a href="#">Terminos de uso</a></li>
            <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>