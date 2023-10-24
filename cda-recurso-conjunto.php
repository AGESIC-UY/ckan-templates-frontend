<?php
  $title = 'Recurso';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="cda-listado-conjuntos.php">Conjuntos de Datos</a></li>
        <li><a href="cda-ficha-conjunto.php">Nombre del conjunto</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
          <div class="Grid Grid--noGutter">
              <div class="Grid-item u-md-size1of4">
                  <!--
                  <div class="Page-nav">
                    <a class="Page-navTitle js-toggleLocalNav" href="#">Remuneraciones y compensaciones por concepto</a>
                    <ul class="Page-navList">
                      <li class="is-active"><a href="#">Datos y recursos</a></li>
                      <li><a href="#">Flujo de actividad</a></li>
                      <li><a href="#">Categoría</a></li>
                      <li><a href="#">Aplicaciones</a></li>
                    </ul>
                  </div>
                  -->
                  <div class="Page-nav">
                    <a class="Page-navTitle js-toggleLocalNav" href="#">Remuneraciones y compensaciones por concepto</a>
                    <ul class="Page-navList">
                      <li><a href="cda-ficha-conjunto.php">Datos y recursos</a>
                        <ul class="Page-navSublist">
                          <li class="is-active"><a href="cda-recurso-conjunto.php" title="Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)">Metadatos de remuneraciones...</a>
                          </li>
                          <li><a href="cda-recurso-conjunto.php" title="Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)">Montos de remuneraciones..</a></li>
                          <li><a href="cda-recurso-conjunto.php" title="Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)">Metadatos de remuneraciones..</a></li>
                          <li><a href="cda-recurso-conjunto.php" title="Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)">Montos de remuneraciones..</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Flujo de actividad</a></li>
                      <!-- <li><a href="#">Categoría</a></li> -->
                      <li><a href="#">Aplicaciones</a></li>
                    </ul>
                  </div>
                  
              </div>

              <div class="Grid-item u-md-size3of4">
                  <div class="Page-body">

                    <div class="Page-document">

                    <span class="Page-subtitle">Datos y recursos</span>
                    <h2 class="Page-title">Metadatos de remuneraciones y compensaciones por concepto 2017</h2>
    
                    <div class="Page-info">
                      <div class="Bar">
                        <div class="Bar-cell">
                          <div class="Page-date"><strong>Última actualización:</strong> 28 Junio, 2018, 13:24 (UTC)</div>
                        </div>
                        <div class="Bar-cell">
                          <ul class="Page-actions">
                            <li>
                              <a href="#" class="Button Button--small">
                                <span class="Icon Icon--print Icon--small"></span>
                              </a>
                            </li>
                            <li>
															<?php include "inc/dropdown-compartir.php"; ?>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                    <div class="Download">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="File-icon">
                              <span class="Icon Icon--json"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <!--<a href="cda-recurso-conjunto.php" title="Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)"></a>-->
                          <p class="Download-description u-textBlack">Datos de remuneraciones año 2017 que incluyen valor de encuestas realizadas y aprobadas según ubicación geográfica y datos de remuneraciones por compensaciones especiales o diferencias por subrogación a cargos superiores.</p>
                          <a href="#" class="Button Button--primary u-mb1 u-mr2">Descargar (.json 24 KB)</a>
                          <span class="Status Status--verde">Activo</span>
                        </div>
                      </div>
                    </div>
                    
                    
                    <table class="Table" aria-label="Metadatos">
                      <thead>
                        <tr>
                          <th>Campo</th>
                          <th>Valor</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-title="Título Columna 1">Estado</td>
                          <td data-title="Título Columna 2"><span class="Status Status--verde">Activo</span></td>
                        </tr>
                        <tr>
                          <td data-title="Título Columna 1">Última actualización</td>
                          <td data-title="Título Columna 2">28 Junio, 2018, 13:24 (UTC)</td>
                        </tr>
                        <tr>
                          <td data-title="Título Columna 1">Creado</td>
                          <td data-title="Título Columna 2">28 Junio, 2018, 13:24 (UTC)</td>
                        </tr>
                        <tr>
                          <td data-title="Título Columna 1">Formato</td>
                          <td data-title="Título Columna 2"><span class="Tags-item Tags-item--json u-mb0">JSON</span></td>
                        </tr>
                        <tr>
                          <td data-title="Título Columna 1">Licencia</td>
                          <td data-title="Título Columna 2">Licencia de DAG de Uruguay</td>
                        </tr>
                        <tr>
                          <td data-title="Título Columna 1">Nivel de apertura</td>
                          <td data-title="Título Columna 2">0 de 5<br>Razón: Licencia no abierta<br>Comprobado: Julio 25, 2018</td>
                        </tr>
                        <tr>
                          <td data-title="Título Columna 1">Enlace</td>
                          <td data-title="Título Columna 2">El enlace está bien.<br>Verificado: Julio 25, 2018</td>
                        </tr>
                      </tbody>
                    </table>
    
                    <div class="Bar u-mt6">
                      <div class="Bar-cell">
                        <h3 class="u-mb0">Explorador de datos</h3>
                      </div>
                      <div class="Bar-cell">
                        <button class="Button Button--small u-right"><span class="Icon Icon--code Icon--small u-mr1"></span>Incrustar</button>
                      </div>
                    </div>

                    <iframe class="u-mt2 u-lg-sizeFull" src="https://catalogodatos.gub.uy/dataset/compensaciones_remuneraciones_por_concepto/resource/74fd2035-573f-403c-a3b8-c4cd331fbed1/view/2fd9101f-6bb5-461c-ac05-c77a950500de" data-module="data-viewer" allowfullscreen="" title="Compensaciones remuneraciones por concepto" style="height: 480px;">
                    </iframe>

                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </main>
  
  
 <!-- <main class="u-main" id="contenido">
    <div class="Container">
    
      <div class="Grid">
        <div class="Grid-item u-md-size3of4">
          <div class="Page">

              
          </div>
        </div>

        
        <div class="Grid-item u-md-size1of4">

          <div class="Box">
            <div class="Box-header">
              <h3 class="Box-name">Datos abiertos</h3>
            </div>
            <div class="Box-body">
              <ul class="u-bullet">
                <li><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)">Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)</a>
                <ul class="u-pl3"><li><a href="visualizacion-recurso-conjunto-datos.php">Visualizador gráfico</a></li></ul>
                </li>
                <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)">Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)</a></li>
                <li><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)">Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)</a></li>
                <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)">Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)</a></li>
              </ul>
            </div>
          </div>

          <div class="Box Box--navLocal">
            <div class="Page-nav">
              <a class="Page-navTitle js-toggleLocalNav" href="#">Remuneraciones y compensaciones por concepto</a>
              <ul class="Page-navList">
                <li><a href="ficha-conjunto-datos.php">Datos y recursos</a>
                  <ul class="Page-navSublist">
                    <li class="is-active"><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)">Metadatos de remuneraciones...</a></li>
                    <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)">Montos de remuneraciones..</a></li>
                    <li><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)">Metadatos de remuneraciones..</a></li>
                    <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)">Montos de remuneraciones..</a></li>
                  </ul>
                </li>
                <li><a href="#">Flujo de actividad</a></li>
                <li><a href="#">Categoría</a></li>
                <li><a href="#">Aplicaciones</a></li>
              </ul>
            </div>
          </div>
         
        </div>

      </div>
    </div>
  </main> -->


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
