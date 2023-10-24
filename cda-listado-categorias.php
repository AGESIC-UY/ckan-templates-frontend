<?php
  $title = 'Categorías';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="cda-home.php">Inicio</a></li>
        <li><a href="cda-listado-categorias.php">Categorías</a></li>
      </ul>
    </div>
  </div>
  
  <div class="Group Group--color1 UN-cabezal">
    <div class="Container">
      <div class="UN-cabezal-header">
        <h2 class="Group-title UN-cabezal-title">Categorías de conjuntos de datos</h2>
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
                  
                    <!-- Listado de filtros sin aplicar -->
 										<?php include "inc/filtros.php"; ?>
                    
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">
                        <h2 class="Page-title u-mb3">20 categorías encontradas</h2>
                        
                        <p class="u-mb5">Puedes usar las categorías de CKAN para crear y administrar colecciones de conjuntos de datos. Esto se puede usar para catalogar conjuntos de datos de un proyecto concreto o un equipo, o de un tema en particular, o como una manera muy sencilla de ayudar a la gente a buscar y encontrar sus propios conjuntos de datos publicados.</p>
                        
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
                              <h3>Nombre de la categoría</h3>
                              <p>Descripción de la categoría. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <p><strong>19 seguidores</strong> - <a href="#">Seguir categoría</a></p>
                              <p>Publicadores: <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">mostrar 7 más</a></p>
                              <div class="u-mt2">
                                <a href="cda-listado-conjuntos-filtros.php" class="Button Button--primary Button--small u-mr2">Ver 28 conjuntos de datos</a>
                                <a href="#" class="u-inlineBlock">Flujo de actividad</a>
                              </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h3>Nombre de la categoría</h3>
                              <p>Descripción de la categoría. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <p><strong>19 seguidores</strong> - <a href="#">Seguir categoría</a></p>
                              <p>Publicadores: <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">mostrar 7 más</a></p>
                              <div class="u-mt2">
                                <a href="cda-listado-conjuntos-filtros.php" class="Button Button--primary Button--small u-mr2">Ver 28 conjuntos de datos</a>
                                <a href="#" class="u-inlineBlock">Flujo de actividad</a>
                              </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h3>Nombre de la categoría</h3>
                              <p>Descripción de la categoría. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <p><strong>19 seguidores</strong> - <a href="#">Seguir categoría</a></p>
                              <p>Publicadores: <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">mostrar 7 más</a></p>
                              <div class="u-mt2">
                                <a href="cda-listado-conjuntos-filtros.php" class="Button Button--primary Button--small u-mr2">Ver 28 conjuntos de datos</a>
                                <a href="#" class="u-inlineBlock">Flujo de actividad</a>
                              </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h3>Nombre de la categoría</h3>
                              <p>Descripción de la categoría. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <p><strong>19 seguidores</strong> - <a href="#">Seguir categoría</a></p>
                              <p>Publicadores: <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">mostrar 7 más</a></p>
                              <div class="u-mt2">
                                <a href="cda-listado-conjuntos-filtros.php" class="Button Button--primary Button--small u-mr2">Ver 28 conjuntos de datos</a>
                                <a href="#" class="u-inlineBlock">Flujo de actividad</a>
                              </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <img src="img/150x150.png" alt="">
                            </div>
                            <div class="Media-body">
                              <h3>Nombre de la categoría</h3>
                              <p>Descripción de la categoría. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                              <p><strong>19 seguidores</strong> - <a href="#">Seguir categoría</a></p>
                              <p>Publicadores: <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">Nombre Publicador</a>, <a href="#">mostrar 7 más</a></p>
                              <div class="u-mt2">
                                <a href="cda-listado-conjuntos-filtros.php" class="Button Button--primary Button--small u-mr2">Ver 28 conjuntos de datos</a>
                                <a href="#" class="u-inlineBlock">Flujo de actividad</a>
                              </div>
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
									</div>
								</div>
              </div>
          </div>
      </div>
  <!--</div>-->


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
