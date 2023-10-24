<?php
  $title = 'Conjuntos de Datos';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="cda-home.php">Inicio</a></li>
        <li><a href="cda-listado-conjuntos.php">Conjuntos de Datos</a></li>
      </ul>
    </div>
  </div>
  
  <div class="Group Group--color1 UN-cabezal">
    <div class="Container">
      <div class="UN-cabezal-header">
        <h2 class="Group-title UN-cabezal-title">Conjuntos de datos</h2>
        <div class="Page-actions Dropdown u-right" tabindex="0">
          <div class="Dropdown-trigger Button Button--white Button--small">
            <span class="Icon Icon--share Icon--small"></span> Compartir esta página
          </div>

          <div class="Dropdown-menu">
            <div class="List">
              <a href="#" class="List-item">Facebook</a>
              <a href="#" class="List-item">Twitter</a>
              <a href="#" class="List-item">Google +</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CONENIDO -->
  <div class="u-main UN-contenido" id="contenido">
      <div class="Container">
          <div class="Page Page--hasNav">
              <div class="Grid Grid--noGutter">
                  <div class="Grid-item u-md-size1of4 Filtros-CDA">
                  
                    <!-- Listado de filtros aplicados -->
 										<?php include "inc/filtros-aplicados.php"; ?>

                  </div>

                  <main class="Grid-item u-md-size3of4">
                      <div class="Page-body">
                        <h3 class="Page-title">2.151 conjuntos de datos encontrados</h3>
                        
                        <!-- Filtros de búsqueda aplicados como etiquetas -->
                        <div class="Tags u-mb3">
                          <p class="u-mr1 u-mb0 u-inlineBlock">Filtros aplicados:</p>
                          <a href="#" class="Tags-item Tags-item--selected">Estadísticas</a>
                          <a href="#" class="Tags-item Tags-item--selected">Contexto sociodemográfico</a>
                          <a href="#" class="Tags-item Tags-item--selected">Mercado laboral</a>
                          <a href="#" class="Tags-item Tags-item--selected">CSV</a>
                        </div>
                       
                        <div class="Page-info">
                          <div class="Bar">
                          <div class="Bar-cell u-textRight">
                            <label for="order-by" class="u-mb0 u-mr1">Ordenar por:</label>
                          </div>
                          <div class="Bar-cell" style="width: 190px">
                          <select id="order-by" class="Form-select">
                                <option value="0">Relevancia</option>
                                <option value="1">Nombre ascendente</option>
                                <option value="2">Nombre descendente</option>
                                <option value="3">Última modificación</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        
                        <ul class="List List--media">
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h4><a href="cda-ficha-conjunto.php">Padrones urbanos y rurales</a></h4>
                              <p>Datos alfanuméricos relevantes de padrones urbanos y rurales de todo el país.</p>
                              <div class="Tags u-mb1">
                                <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                                <a href="#" class="Tags-item Tags-item--pdf">PDF</a>
                                <a href="#" class="Tags-item Tags-item--csv">CSV</a>
                                <a href="#" class="Tags-item Tags-item--zip">ZIP</a>
                              </div>
                              <p><strong>Última actualización: </strong>6 de julio de 2018, 14:45 (UTC-03:00)</p>
                              <p><strong>Publicador:</strong> <a href="#">Nombre del Organismo</a></p>
                              <p><strong>Categoría:</strong> <a href="#">Infraestructura</a></p>
                              <p><strong>Etiquetas:</strong> <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">mostrar 3 más</a></p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h4><a href="cda-ficha-conjunto.php">Remuneraciones y compensaciones por concepto</a></h4>
                              <p>Remuneraciones de funcionarios</p>
                              <div class="Tags u-mb1">
                                <a href="#" class="Tags-item Tags-item--json">JSON</a>
                                <a href="#" class="Tags-item Tags-item--csv">CSV</a>
                              </div>
                              <p><strong>Última actualización: </strong>4 de julio de 2018, 11:58 (UTC-03:00)</p>
                              <p><strong>Publicador:</strong> <a href="#">Nombre del Organismo</a></p>
                              <p><strong>Categoría:</strong> <a href="#">Infraestructura</a></p>
                              <p><strong>Etiquetas:</strong> <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">mostrar 3 más</a></p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                                <h4><a href="cda-ficha-conjunto.php">Encuesta Continua de Hogares 2012</a></h4>
                                <p>Microdatos de la Encuesta Continua de Hogares año 2012</p>
                                <div class="Tags u-mb1">
                                  <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                                  <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                                </div>
                                <p><strong>Última actualización: </strong>2 de julio de 2018, 14:56 (UTC-03:00)</p>
                                <p><strong>Publicador:</strong> <a href="#">Nombre del Organismo</a></p>
                                <p><strong>Categoría:</strong> <a href="#">Infraestructura</a></p>
                                <p><strong>Etiquetas:</strong> <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">mostrar 3 más</a></p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h4><a href="cda-ficha-conjunto.php">Encuesta Continua de Hogares año 2013</a></h4>
                              <p>Microdatos, cuestionarios, diccionario de variables y notas de la Encuesta Continua de Hogares año 2013</p>
                              <div class="Tags u-mb1">
                                <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                                <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                                <a href="#" class="Tags-item Tags-item--pdf">PDF</a>
                              </div>
                              <p><strong>Última actualización: </strong>2 de julio de 2018, 14:55 (UTC-03:00)</p>
                              <p><strong>Publicador:</strong> <a href="#">Nombre del Organismo</a></p>
                              <p><strong>Categoría:</strong> <a href="#">Infraestructura</a></p>
                              <p><strong>Etiquetas:</strong> <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">mostrar 3 más</a></p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
															<h3><a href="cda-ficha-conjunto.php">Encuesta Continua de Hogares 2008</a></h3>
															<p>Microdatos de la Encuesta Continua de Hogares 2008. Se adjuntan dos datasets, el primero
																correspondiente a los datos del hogar encuestado y el segundo contiene los datos de las personas
																integrantes de cada hogar.</p>
															<div class="Tags u-mb1">
																<a href="#" class="Tags-item Tags-item--json">JSON</a>
																<a href="#" class="Tags-item Tags-item--csv">CSV</a>
																<a href="#" class="Tags-item Tags-item--html">HTML</a>
																<a href="#" class="Tags-item Tags-item--xls">XLS</a>
																<a href="#" class="Tags-item Tags-item--pdf">PDF</a>
																<a href="#" class="Tags-item Tags-item--zip">ZIP</a>
																<a href="#" class="Tags-item Tags-item--rar">RAR</a>
																<a href="#" class="Tags-item Tags-item--xml">XML</a>
																<a href="#" class="Tags-item Tags-item--txt">TXT</a>
																<a href="#" class="Tags-item Tags-item--undefined">UNDEFINED</a>
																<!-- Nuevos -->
																<a href="#" class="Tags-item Tags-item--jpg">JPG</a>
																<a href="#" class="Tags-item Tags-item--docx">DOCX</a>
																<a href="#" class="Tags-item Tags-item--dxf">DXF</a>
																<a href="#" class="Tags-item Tags-item--geojson">GEOJSON</a>
																<a href="#" class="Tags-item Tags-item--geopackage">GEOPACKAGE</a>
																<a href="#" class="Tags-item Tags-item--kml">KML</a>
																<a href="#" class="Tags-item Tags-item--ods">ODS</a>
																<a href="#" class="Tags-item Tags-item--odt">ODT</a>
																<a href="#" class="Tags-item Tags-item--json">SAV</a>
																<a href="#" class="Tags-item Tags-item--shp">SHP</a>
																<a href="#" class="Tags-item Tags-item--xls">XLSX</a>
																<a href="#" class="Tags-item Tags-item--xml">XSD</a>
																<a href="#" class="Tags-item Tags-item--ebook">EBOOK</a>
																<a href="#" class="Tags-item Tags-item--epub">EPUB</a>
															</div>
															<p><strong>Última actualización: </strong>24 de abril de 2017, 21:00 (UTC-03:00)</p>
															<p><strong>Publicador:</strong> <a href="#">Nombre del Organismo</a></p>
															<p><strong>Categoría:</strong> <a href="#">Infraestructura</a></p>
															<p><strong>Etiquetas:</strong> <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">Nombre Etiqueta</a>, <a href="#">mostrar 3 más</a></p>
														</div>
                          </li>
                      </ul>

                      <div class="Pagination">
                        <div class="Pagination-text">Mostrando 5 de 20 resultados</div>
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
                </main>
              </div>
          </div>
      </div>
  </div>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
