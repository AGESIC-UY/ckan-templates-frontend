<?php
  $title = 'Actividad';
  $form = true;
  $logged = true;
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>
  
  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="cda-home-usuario.php">Inicio</a></li>
        <li><a href="cda-administrar-usuario.php">Actividad</a></li>
      </ul>
    </div>
  </div>
  
  <!-- Contenido -->
  <main class="u-main" id="contenido">
    
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
            <div class="Page-nav">
              <a class="Page-navTitle js-toggleLocalNav" href="cda-home-usuario.php">
                  <span class="Caret u-md-hide"></span>Juan Pérez
              </a>

              <ul class="Page-navList">
                <li><a href="#">Estadísticas</a></li>
                <li class="is-active"><a href="#">Actividad</a></li>
                <li><a href="#">Mis Conjuntos de Datos</a></li>
                <li><a href="#">Mis Organismos / Publicadores</a></li>
                <!--
                <li>
                    <a href="carpeta.html">Items</a>
                    <ul class="Page-navSublist">
                        <li><a href="documento.html">Item uno</a></li>
                        <li><a href="documento.html">Item dos</a></li>
                    </ul>
                </li>
                -->
                <li><a href="#">Mis Categorías</a></li>
                <li><a href="#">Mis Aplicaciones</a></li>
                <li><a href="cda-administrar-usuario.php">Administrar usuario</a></li>
              </ul>
            </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">
                <h2 class="Page-title">Actividad</h2>

                <h3 class="Page-description">Feed de Noticias de los elementos que sigue</h3>
                
                <div class="Box--listadoEnlaces">
                  <ul class="Box-gridList Box-gridList--actividad Grid">
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Juan Pérez</a><span class="u-initial"> actualizó el conjunto de datos </span><a class="u-initial" href="#">Actas y Resoluciones de Directorio</a>
                          <span class="Box-info u-textMute">Hace 2 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil-2.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Otra persona</a><span class="u-initial"> empezó a seguir tu conjunto de datos </span><a class="u-initial" href="#">Locales de la Red Nacional Postal y de Atención Ciudadana</a>
                          <span class="Box-info u-textMute">Hace 9 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Juan Pérez</a><span class="u-initial"> creó el conjunto de datos </span><a class="u-initial" href="#">Cantidad de automotores (autos y camionetas, camiones, autobuses, motocicletas). Total país</a>
                          <span class="Box-info u-textMute">Hace 21 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Juan Pérez</a><span class="u-initial"> actualizó el conjunto de datos </span><a class="u-initial" href="#">Actas y Resoluciones de Directorio</a>
                          <span class="Box-info u-textMute">Hace 2 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil-2.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Otra persona</a><span class="u-initial"> empezó a seguir tu conjunto de datos </span><a class="u-initial" href="#">Locales de la Red Nacional Postal y de Atención Ciudadana</a>
                          <span class="Box-info u-textMute">Hace 9 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Juan Pérez</a><span class="u-initial"> creó el conjunto de datos </span><a class="u-initial" href="#">Cantidad de automotores (autos y camionetas, camiones, autobuses, motocicletas). Total país</a>
                          <span class="Box-info u-textMute">Hace 21 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Juan Pérez</a><span class="u-initial"> actualizó el conjunto de datos </span><a class="u-initial" href="#">Actas y Resoluciones de Directorio</a>
                          <span class="Box-info u-textMute">Hace 2 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil-2.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Otra persona</a><span class="u-initial"> empezó a seguir tu conjunto de datos </span><a class="u-initial" href="#">Locales de la Red Nacional Postal y de Atención Ciudadana</a>
                          <span class="Box-info u-textMute">Hace 9 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil-2.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Otra persona</a><span class="u-initial"> empezó a seguir tu conjunto de datos </span><a class="u-initial" href="#">Locales de la Red Nacional Postal y de Atención Ciudadana</a>
                          <span class="Box-info u-textMute">Hace 9 días</span>
                        </div>
                      </div>
                    </li>
                    
                    <li class="Grid-item">
                      <div class="Flag">
                        <div class="Flag-image Flag-image--top">
                          <img class="u-circle" src="./img/img-perfil.png" alt="">
                        </div>
                        <div class="Flag-body">
                          <a class="u-initial" href="#">Juan Pérez</a><span class="u-initial"> creó el conjunto de datos </span><a class="u-initial" href="#">Cantidad de automotores (autos y camionetas, camiones, autobuses, motocicletas). Total país</a>
                          <span class="Box-info u-textMute">Hace 21 días</span>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
                
                <div class="Pagination">
                  <div class="Pagination-text">Mostrando 10 de 36 resultados</div>
                  <ul class="Pagination-links">
                    <li class="Pagination-prev"><a href="#">Anterior</a></li>
                    <li class="is-selected"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="Pagination-next"><a href="#">Siguiente</a></li>
                  </ul>
                </div>

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
