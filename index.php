<?php
  $title = 'Index';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- contenido -->
  <div class="u-main">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size8of10">
          <div class="Page-document">
            <div class="Page">
              <h2 class="Page-title">Índice: Nuevo Catálogo de Datos Abiertos</h2>
              
              <h3>Catálogo de Datos Abiertos</h3>

              <ul>
                <li><a href="cda-home.php">Home</a></li>
                <li><a href="cda-listado-conjuntos.php">Listado: Conjuntos de Datos (Sin filtros aplicados)</a>
                <li><a href="cda-listado-conjuntos-filtros.php">Listado: Conjuntos de Datos (Con filtros aplicados)</a>
                	<ul>
                    	<li><a href="cda-ficha-conjunto.php">Datos y recursos de un Conjunto de Datos</a>
                        <li><a href="cda-recurso-conjunto.php">Recurso de un Conjunto de Datos</a>
                    </ul>
                </li>
                <li><a href="cda-listado-publicadores.php">Listado: Publicadores</a></li>
                <li><a href="cda-listado-categorias.php">Listado: Categorías</a></li>
                <li><a href="cda-listado-aplicaciones.php">Listado: Aplicaciones</a>
                	<ul>
                    	<li><a href="cda-ficha-aplicacion.php">Ficha de Aplicación</a>
                    </ul>
                </li>
                <li><a href="contacto.php">Contacto</a></li>
              </ul>
              
              
              <h3>Backend</h3>
              <ul>  
                <li><a href="cda-home-usuario.php?user">Home logueado</a></li>
                <li><a href="cda-actividad.php?user">Actividad</a></li>
                <li><a href="cda-listado-conjuntos-usuario.php?user">Listado: Mis Conjuntos de Datos</a></li>
                
                <li>Formularios
                  <ul class="u-my1">
                    <li><a href="cda-formulario-carga-datos-abiertos.php?user">Formulario de carga: Conjunto de Datos</a></li>
                    <li><a href="cda-formulario-single.php?user">Ejemplo de formulario</a></li>
                  </ul>
                </li>
                
                <li><a href="cda-administrar-usuario.php?user">Administrar usuario</a></li>
              </ul>
							
							<h3>Recursos</h3>
              <ul>  
                <li><a href="paleta-de-colores-web.pdf">Paleta de colores</a></li>
							</ul>	
							
							<h3>Visualizador de Datos Abiertos y Estadísticas</h3>
              <ul>  
                <li><a href="cda-visualizador-datos.php">Ejemplo de Visualizador de Datos Abiertos y Estadísticas</a></li>
							</ul>	
								
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
