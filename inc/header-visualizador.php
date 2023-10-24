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
          <a href="#">Organismo Responsable del Visualizador</a>
        </div>
				
      </div>
			
			<div class="Header-login">
				<?php include "inc/dropdown-lang.php"; ?>
			</div>	
			
    </div>
  </div>
	
	<!-- Cuando el visualizador no tiene menú de navegación, debe agregarse la clase "u-py2" a Header-body para centrar el nombre en vertical -->
  <div class="Header-body">
    <div class="Container">
      <div class="Header-logo u-md-size1of3 u-size3of4">
        <a href="./">
          <div class="Logo">
            <!--<img class="Logo-image" src="./assets/escudo-blanco.svg" alt="">-->
            <div class="Logo-text">
              <h1 class="Logo-title">
								<span class="Logo-role">Visualizador de</span>
								<span>Datos Abiertos y Estadísticas</span>
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
			
			<!--
      <div class="Header-search">
        <div class="Search">
          <form action="./">
            <label for="search" class="u-hideVisually">Buscar:</label>
            <input id="search" class="Search-input" type="search" placeholder="Buscar en el Visualizador" />
            <button class="Search-button">Buscar</button>
          </form>
        </div>
      </div>
			-->

    </div>
  </div>
</header>

<nav class="Nav js-mainNav" id="menu">
  <div class="Container">
    <ul class="Nav-list">
      <li class="Nav-item">
        <a href="#" id="item-1">Elemento de menú</a>
      </li>
      <li class="Nav-item">
        <a href="#" id="item-2">Otro item</a>
      </li>
      <li class="Nav-item">
        <a href="#" id="item-3">Item desplegable</a>
				<div class="Nav-subnav">
          <ul>
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a></li>
            <li><a href="#">Item 3</a></li>
          </ul>
        </div>
      </li>
      <li class="Nav-item">
        <a href="#" id="item-4">Último item</a>
      </li>
    </ul>
  </div>
</nav>