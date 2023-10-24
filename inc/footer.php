<div class="Feedback">
  <div class="Container">
    <div class="u-cfx">
      <div class="Feedback-error">
        <span>Si encontraste algún error en este sitio:</span>
        <a href="ayudanos-a-mejorar.php" class="u-ml0">ayudanos a mejorarlo</a>
      </div>
    </div>
  </div>
</div>

<footer class="Footer Footer--minisitio Footer--catalogo">
	<h2 class="u-hideVisually">Pie de página</h2>
	<div class="Footer-body">
  	<div class="Container">
      <div class="Grid">
        <div class="Grid-item u-md-size1of3">
          <div class="Footer-info u-md-pr3">
            <h3 class="Footer-title">Catálogo de Datos Abiertos</h3>

            <address>
              <p><span>Dirección:</span> Liniers 1324 piso 4</p>
              <p><span>Teléfono:</span> (+598) 2901 2929</p>
              <p><span>Horario de atención:</span><br>Lunes a viernes de 9:30 a 17:30 hs.</p>
							<p><span>Correo electrónico:</span> datosabiertos@agesic.gub.uy</p>
              <p><a href="#">Contacto</a></p>
            </address>
						
						<div class="Footer-social">
							<ul>
								<li><a href="#"><span class="Icon Icon--facebook"></span><span class="u-hideVisually">Facebook</span></a></li>
								<li><a href="#"><span class="Icon Icon--twitter"></span><span class="u-hideVisually">Twitter</span></a></li>
								<li><a href="#"><span class="Icon Icon--youtube"></span><span class="u-hideVisually">YouTube</span></a></li>
								<li><a href="#"><span class="Icon Icon--linkedin"></span><span class="u-hideVisually">Twitter</span></a></li>
								<li><a href="#"><span class="Icon Icon--tumblr"></span><span class="u-hideVisually">Tumblr</span></a></li>
								<li><a href="#"><span class="Icon Icon--instagram"></span><span class="u-hideVisually">Instagram</span></a></li>
								<li><a href="#"><span class="Icon Icon--spotify"></span><span class="u-hideVisually">Spotify</span></a></li>
							</ul>
						</div>
						
          </div>
        </div>
        <div class="Grid-item u-md-size2of3">
          <div class="Grid">
            <div class="Grid-item u-md-size1of3">
              <div class="Footer-list u-md-pl3">
                <h3>Institucional</h3>
                <ul class="u-bullet">
                  <li><a href="#">Estructura del organismo</a></li>
                  <li><a href="#">Preguntas Frecuentes</a></li>
                  <li><a href="#">Transparencia</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
            </div>
            <div class="Grid-item u-md-size1of3">
              <div class="Footer-list">
                <h3>Trámites y servicios</h3>
                <ul class="u-bullet">
                  <li><a href="#">Lorem ipsum dolor</a></li>
                  <li><a href="#">Perferendis suscipit</a></li>
                  <li><a href="#">Voluptates ratione</a></li>
                  <li><a href="#">Impedit voluptatibus</a></li>
                </ul>
              </div>
            </div>
            <div class="Grid-item u-md-size1of3">
              <div class="Footer-list">
                <h3>Acceso por perfiles</h3>
                <ul class="u-bullet">
                  <li><a href="#">Conjuntos de Datos</a></li>
                  <li><a href="#">Publicadores</a></li>
                  <li><a href="#">Categorías</a></li>
									<li><a href="#">Aplicaciones y uso de datos</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="Footer-logos">
						<div class="Footer-logo">
              <a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/">
                <img src="./assets/logo-agesic-blanco.png" alt="Agesic" style="margin-top: .25rem;">
              </a>
            </div>
						<!--
						<div class="Footer-logo">
							<a href="#" class="Logo">
								<img class="Logo-image" src="./assets/escudo-blanco.svg" alt="">
								<div class="Logo-text">
									<div class="Logo-title">
										<span class="Logo-role">Agencia</span>
										<span>de Gobierno Electrónico y Sociedad de la</span>
										<span>Información y del Conocimiento</span>
									</div>
								</div>
							</a>
            </div>
						-->
          </div>
        </div>
      </div>
    </div>
  </div>
	<div class="Footer-bottom">
		<div class="Container">
			<div class="Footer-logo u-inlineBlock">
				<a href="./">
					<span class="Brand Brand--white Brand--sm">
						<span class="Brand-text">gub.uy</span>
					</span>
				</a>
			</div>
      <div class="Footer-links">
        <ul>
          <li>Sitio oficial de la República Oriental del Uruguay</li>
          <li><a href="#">Mapa del Sitio</a></li>
          <li><a href="#">Términos de uso</a></li>
          <li><a href="#">Política de privacidad</a></li>
          <li><a href="#">Declaración de accesibilidad</a></li>
        </ul>
      </div>
    </div>
	</div>
</footer>

<?php
  if (isset($_GET['menu'])) :
    include "inc/menu.php";
  else :
    include "inc/parent-nav.php";
  endif;
?>
