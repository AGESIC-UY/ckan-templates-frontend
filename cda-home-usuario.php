<?php
  $title = 'Home';
  $form = true;
  $logged = true;
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- contenido -->
  <div id="contenido" class="u-main u-mt0">

    <div class="Group Group--color1 u-mt0 u-pt6">
      <div class="Container">
        <h2 class="Group-title">Juan Pérez</h2>
				
				<!-- Aviso cuando son más de 5 -->
				<div class="Alert Alert--dialog Alert--warning">
					<h4 class="Alert-title">Hay <strong>12</strong> enlaces rotos para corregir</h4>
					<a href="#">Ver enlaces rotos</a>
				</div>
				
				<!-- Aviso cuando son 5 o menos -->
				<div class="Alert Alert--dialog Alert--warning">
					<h4 class="Alert-title">Hay <strong>3</strong> enlaces rotos para corregir</h4>
					<ol>
						<li><a href="#">Horarios de omnibus en líneas interdepartamentales</a></li>
						<li><a href="#">Recorridos ómnibus suburbanos</a></li>
						<li><a href="#">Remuneraciones y compensaciones por concepto</a></li>
					</ol>
				</div>

        <div class="Module Module--md">
          <div class="Grid">
						
						<div class="Grid-item u-md-size1of3">
              <div class="Module-item Module-item--3of3">
                <div class="Box Box--mf">
									<div class="Box-header">
                    <h3 class="Box-name">Conjuntos de datos más vistos de mi organización</h3>
                  </div>
									<div class="Box-body">
                    <ul class="List">
											<li class="List-item u-px0">
                        <div class="Media-body">
                          <h3 class="Box-title u-h5 u-pt1 u-mb1"><a href="#">Horarios de omnibus en líneas interdepartamentales</a></h3>
													<p class="u-textSmall u-mb1"><strong>Vistas: </strong>1792</p>
                        </div>
                      </li>
											<li class="List-item u-px0">
                        <div class="Media-body">
                          <h3 class="Box-title u-h5 u-pt1 u-mb1"><a href="#">Recorridos ómnibus suburbanos</a></h3>
													<p class="u-textSmall u-mb1"><strong>Vistas: </strong>829</p>
                        </div>
                      </li>
											<li class="List-item u-px0">
                        <div class="Media-body">
                          <h3 class="Box-title u-h5 u-pt1 u-mb1"><a href="#">Remuneraciones y compensaciones por concepto</a></h3>
													<p class="u-textSmall u-mb1"><strong>Vistas: </strong>501</p>
                        </div>
                      </li>                      
                    </ul>
                  </div>
									 <div class="Box-footer">
                    <a href="#" class="Box-more">Ver Conjuntos de datos más vistos</a>
                  </div>
								</div>
							</div>
						</div>	
						
            <div class="Grid-item u-md-size1of3">
              <div class="Module-item Module-item--3of3">
                <div class="Box Box--mf">
                  <div class="Box-header">
                    <h3 class="Box-name">Próximos vencimientos</h3>
                  </div>
                  <div class="Box-body">
                    <ul class="List">
                      <li class="List-item u-px0">
                        <div class="Media-body">
                          <span class="Box-info u-pt1"><span class="Status Status--rojo">Hoy</span></span>
                          <h3 class="Box-title u-h5 u-mb1"><a href="#">Cantidad de automotores (autos y camionetas, camiones, autobuses, motocicletas). Total país</a></h3>
                        </div>
                      </li>
                      <li class="List-item u-px0">
                        <div class="Media-body">
                          <span class="Box-info u-pt1"><span class="Status Status--amarillo">3 de julio, 2019</span></span>
                          <h3 class="Box-title u-h5 u-mb1"><a href="#">4 Conjuntos de Datos</a></h3>
                        </div>
                      </li>
                      <li class="List-item u-px0">
                        <div class="Media-body">
                          <span class="Box-info u-pt1"><span class="Status Status--verde">21 de setiembre, 2019</span></span>
                          <h3 class="Box-title u-h5 u-mb1"><a href="#">Montos de remuneraciones y compensaciones por concepto 2018</a></h3>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="Box-footer">
                    <a href="#" class="Box-more">Ver mis Conjuntos de datos</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="Grid-item u-md-size1of3">
              <div class="Module-item Module-item--full">
                <div class="Box Box--mf Box--listadoEnlaces">
                  <div class="Box-header">
                    <h3 class="Box-name">Actividad</h3>
                  </div>
                  <div class="Box-body">
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
                    </ul>
                  </div>
                  <div class="Box-footer">
                    <a href="cda-actividad.php" class="Box-more">Ver mi actividad</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Accesos directos -->
        <div class="Module Module--120">
          <div class="Grid">
            <div class="Grid-item u-md-size1of3">
              <div class="Module-item Module-item--3of3">
								<a href="cda-formulario-single.php" class="Box Box--mf Box--acceso Box--color3">
									<div class="Flag">
											<div class="Flag-image">
													<img src="./img/icono-mas.jpg" alt="">
											</div>
											<div class="Flag-body">
													<span class="Box-title">Panel de estadísticas</span>
											</div>
									</div>
								</a>
              </div>
            </div>
            <div class="Grid-item u-md-size1of3">
              <div class="Module-item Module-item--3of3">
								<a href="cda-formulario-single.php" class="Box Box--mf Box--acceso Box--color4">
									<div class="Flag">
											<div class="Flag-image">
													<img src="./img/icono-ceibal.jpg" alt="">
											</div>
											<div class="Flag-body">
													<span class="Box-title">Nueva aplicación o uso de datos</span>
											</div>
									</div>
								</a>
              </div>
            </div>
            <div class="Grid-item u-md-size1of3">
              <div class="Module-item Module-item--3of3">
								<a href="cda-administrar-usuario.php" class="Box Box--mf Box--acceso Box--accesoCentrado Box--color1">
									<div class="Flag">
											<div class="Flag-body">
													<span class="Box-title">Administrar usuario</span>
													<span class="Box-info">Juan Pérez</span>
											</div>
									</div>
								</a>
              </div>
            </div>
          </div>
        </div>
        <!--
        <div class="Group-footer">
          <a href="#">Ver estadísticas</a>
        </div>
        -->
      </div>
    </div>

    <div class="Container">
				<h2 class="Page-title u-hideVisually">Página principal</h2>
				<div class="Module Module--sm">
					<div class="Grid">
							<div class="Grid-item u-md-size2of3">
									<div class="Module-item">
										<div class="Box Box--mf Box--color4 Box--listadoHorizontal Box--stats">
												<div class="Box-header u-mb2">
													<h3 class="Box-name">Catálogo de Datos Abiertos</h3>
												</div>
												<div class="Box-body u-ml0">
													<p class="Box-text u-mb2">El Catálogo Nacional de Datos Abiertos permite acceder a datos abiertos de organismos públicos, academia, organizaciones de sociedad civil y empresas privadas. Cualquier persona puede utilizar los datos publicados libremente para contar historias, desarrollar investigaciones, visualizaciones, aplicaciones cívicas y emprendimientos.</p>
													<ul class="Box-gridList Grid Grid--rowSize3">
														<li class="Grid-item u-sizeFull u-sm-size1of3 u-mb2">
															<a href="https://catalogodatos.gub.uy/dataset"> 
																<span class="Box-value u-textSemiBold">2.395</span>
																<span class="Box-title">Conjuntos de datos publicados</span>
															</a>
														</li>
														<li class="Grid-item u-sizeFull u-sm-size1of3 u-mb2">
															<a href="https://catalogodatos.gub.uy/organization"> 
																<span class="Box-value u-textSemiBold">56</span>
																<span class="Box-title">Organizaciones publicadoras</span>
															</a>
														</li>
														<li class="Grid-item u-sizeFull u-sm-size1of3">
															<a href="https://catalogodatos.gub.uy/group"> 
																<span class="Box-value u-textSemiBold">22</span>
																<span class="Box-title">Categorías de datos publicadas</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
									</div>
							</div>
							<div class="Grid-item u-md-size1of3">
								<div class="Module-item">
									<a href="https://catalogodatos.gub.uy/dataset/?sort=metadata_modified+desc" class="Box Box--mf Box--destacado4">
										<div class="Box-body">
											<span class="Box-image">
												<img src="./img/icono_escalera_color.jpg" alt="Ícono de gráfica">
											</span>
											<span class="Box-title">Últimas actualizaciones</span>
											<span class="Box-subtitle">Explorá los conjuntos de datos actualizados recientemente</span>
										</div>
									</a>
								</div>
							</div>
					</div>
				</div>
				
			
        <div class="Module Module--1200">
            <div class="Grid">
                <div class="Grid-item u-md-size2of3">
                    <div class="Box Box--mf Box--color7">
											<div class="Box-header">
													<h3 class="Box-name">Datos más populares en las últimas dos semanas</h3>
											</div>
											<div class="Box-body">
                        <ul class="List List--media">
													 <li class="Media">
															<div class="Media-body">
																<h3><a href="cda-ficha-conjunto.php">Horarios de ómnibus urbanos, por parada - STM</a></h3>
																<p>Este juego de datos contiene los horarios de ómnibus del transporte colectivo urbano de Montevideo para cada una de las paradas. Estos son los horarios teóricos estimados en los... </p>
																<div class="Tags u-mb1">
																		<a href="#" class="Tags-item Tags-item--txt">TXT</a>
																		<a href="#" class="Tags-item Tags-item--csv">CSV ZIP</a>
																</div>
																<p class="u-textSmall"><strong>Última actualización: </strong>17 de febrero de 2022, 16:03 (UTC-03:00)</p>
																<p class="u-textSmall"><strong>Publicador:</strong> <a href="#">Intendencia de Montevideo</a></p>
															</div>
													 </li>
													
													 <li class="Media">
															<div class="Media-body">
																	<h3><a href="cda-ficha-conjunto.php">Registro de Operadores Turísticos</a></h3>
																	<p>Este conjunto de datos es la lista de datos públicos del Registro de Operadores del Ministerio de Turismo del Uruguay</p>
																	<div class="Tags u-mb1">
																			<a href="#" class="Tags-item Tags-item--xls">XLSX</a>
																			<a href="#" class="Tags-item Tags-item--csv">CSV</a>
																			<a href="#" class="Tags-item Tags-item--xml">XML</a>
																			<a href="#" class="Tags-item Tags-item--json">JSON</a>
																	</div>
																	<p class="u-textSmall"><strong>Última actualización: </strong>9 de noviembre de 2022, 15:01 (UTC-03:00)</p>
																	<p class="u-textSmall"><strong>Publicador:</strong> <a href="#">Ministerio de Turismo</a></p>
															</div>
                            </li>
                            <li class="Media">
															<div class="Media-body">
																	<h3><a href="cda-ficha-conjunto.php">Shapes del parcelario rural y urbano</a></h3>
																	<p>Archivos shape para descargar de los parcelarios catastrales del Uruguay</p>
																	<div class="Tags u-mb1">
																			<a href="#" class="Tags-item Tags-item--undefined">SHP</a>
																			<a href="#" class="Tags-item Tags-item--undefined">.SHP</a>
																	</div>
																	<p class="u-textSmall"><strong>Última actualización: </strong>14 de noviembre de 2022, 10:32 (UTC-03:00)</p>
																	<p class="u-textSmall"><strong>Publicador:</strong> <a href="#">Dirección Nacional de Catastro</a>
																	</p>
															</div>
                            </li>
                            <li class="Media">
															<div class="Media-body">
																	<h3><a href="cda-ficha-conjunto.php">Cruces de calles de Montevideo</a></h3>
																	<p>Cruces de calles correspondientes al departamento de Montevideo. Sitio web: Montevideo Abierto | Twitter: @montevideodti | Github: dti-montevideo</p>
																	<div class="Tags u-mb1">
																			<a href="#" class="Tags-item Tags-item--undefined">SHP</a>
																	</div>
																	<p class="u-textSmall"><strong>Última actualización: </strong>26 de julio de 2022, 13:01 (UTC-03:00)</p>
																	<p class="u-textSmall"><strong>Publicador:</strong> <a href="#">Intendencia de Montevideo</a></p>
															</div>
                            </li>
                        	</ul>
												</div>
                        <div class="Box-footer">
                            <a class="Box-more" href="https://catalogodatos.gub.uy/dataset/">Ver todos los conjuntos</a>
                        </div>
                    </div>
                </div>
	
                <div class="Grid-item u-md-size1of3">
									
									<div class="Module-item Module-item--1of3">
										<div class="Box Box--mf Box--destacado2 Box--solid">
												<div class="Box-cover">
														<img class="Box-image" src="./img/D2_fondo-datos-abiertos.jpg" alt="Fondo de datos abiertos">
												</div>
												<div class="Box-overlay">
														<a href="https://catalogodatos.gub.uy/agesic/ayudanos-a-mejorar" class="Box-title">¿No encontrás los datos que necesitás?</a>
														<p class="Box-text">Ahora podes contactar al equipo de datos para solicitar ayuda</p>
												</div>
										</div>
									</div>
									
									<div class="Module-item Module-item--1of3">
										<div class="Box Box--mf Box--destacado2 Box--solid">
												<div class="Box-cover">
														<img class="Box-image" src="./img/D2_fondo-visualizador.jpg" alt="Imagen de computadora con visualizaro de datos">
												</div>
												<div class="Box-overlay">
														<a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/listado-por-filtro?tipo%5B0%5D=noticias&tematica%5B0%5D=366" class="Box-title">Novedades</a>
														<p class="Box-text">Conocé las iniciativas y últimas novedades sobre Datos Abiertos que se están desarrollando en Uruguay</p>
												</div>
										</div>
									</div>
									
									<div class="Module-item Module-item--1of3">
										<a href="https://catalogodatos.gub.uy/agesic/ayudanos-a-mejorar" class="Box Box--mf Box--destacado4">
											<div class="Box-body">
												<span class="Box-image">
													<img src="./img/icono_grafica_color.jpg" alt="Ícono de gráfica">
												</span>
												<span class="Box-title">Panel de estadísticas</span>
												<!--<span class="Box-subtitle">Dejá tu opinión y tus ideas. Consideramos todas las sugerencias para mejorar nuestros contenidos.</span>-->
											</div>
										</a>
									</div>
                </div>
							
            </div>
        </div>

    </div>
	
		<div class="Group Group--color3">
			<div class="Container">
        <div class="Module Module--md">
            <div class="Grid">
                <div class="Grid-item u-md-size2of3">
                    <div class="Module-item Module-item--3of3">
											
											<div class="Box Box--mf Box--listadoAccesos Box--color2">
												<div class="Box-header">
														<h3 class="Box-name">Buscar por categoría</h3>
												</div>
												<div class="Box-body">
														<ul class="Box-gridList Grid Grid--rowSize3">
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/estadisticos">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-estadisticas.jpg" alt="Ícono categoría Estadísticas">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Estadísticas</span>
																					<span class="Box-info">432 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/educacion">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-educacion.jpg" alt="Ícono categoría Educación">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Educación</span>
																					<span class="Box-info">308 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/transparencia">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-transparencias.jpg" alt="Ícono categoría transparencias">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Transparencia</span>
																					<span class="Box-info">246 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/salud">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-salud.jpg" alt="Ícono categoría Salud">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Salud</span>
																					<span class="Box-info">258 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/contexto-sociodemografico">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-sociodemo.jpg" alt="Ícono categoría Soc. Demográfico">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Soc. Demográfico</span>
																					<span class="Box-info">263 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/desarrollo-social">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-desarrollosocial.jpg" alt="Ícono categoría Desarrollo Social">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Desarrollo Social</span>
																					<span class="Box-info">219 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/trabajo">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-trabajo.jpg" alt="Ícono categoría Trabajo">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Trabajo</span>
																					<span class="Box-info">230 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/vivienda">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-vivienda.jpg" alt="Ícono categoría Vivienda">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Vivienda</span>
																					<span class="Box-info">168 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/economia">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-economia.jpg" alt="Ícono categoría Economía">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Economía</span>
																					<span class="Box-info">84 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/medio-ambiente">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-medioambiente.png" alt="Ícono categoría Medio ambiente">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Medio Ambiente</span>
																					<span class="Box-info">60 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/alimentacion">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-alimentacion.png" alt="Ícono categoría Alimentación">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Alimentación</span>
																					<span class="Box-info">50 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
																<li class="Grid-item">
																	<a href="https://catalogodatos.gub.uy/group/cultura">
																		<div class="Flag">
																			<div class="Flag-image">
																					<img src="./img/categoria-cultura.png" alt="Ícono categoría Cultura">
																			</div>
																			<div class="Flag-body">
																					<span class="Box-title">Cultura</span>
																					<span class="Box-info">20 conjuntos de datos</span>
																			</div>
																		</div>
																	</a>
																</li>
														</ul>
												</div>
												<div class="Box-footer">
														<a href="https://catalogodatos.gub.uy/group/" class="Box-more">Ver más categorías</a>
												</div>
											</div>
                    </div>
                </div>
								<div class="Grid-item u-md-size1of3">
									<div class="Module-item Module-item--2of3">
										<div class="Box Box--mf Box--listadoEnlaces Box--color6">
											<div class="Box-header">
													<h3 class="Box-name">Guías y recursos de Datos Abiertos</h3>
											</div>
											<div class="Box-body">
													<p class="Box-text">Conocé los documentos necesarios para comenzar a abrir datos de tu organismo.</p>
													<ul class="u-bullet">
														<li><a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/noticias/estrategia-datos-abiertos-uruguay-2025">Estrategia de Datos Abiertos</a></li>
														<li><a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/institucional/normativa?field_tipo_de_norma_target_id=All&year=all&month=all&field_tematica_gubuy=366&field_publico_gubuy=All">Normativa de Datos Abiertos</a></li>
														<li><a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/publicaciones?field_tipo_de_publicacion_target_id=36&field_tematica_gubuy=366&field_fecha_by_year=All&field_fecha_by_month=All&field_publico_gubuy=All">Guías técnicas</a></li>
														<!--
														<li><a href="#">Proyectos con Organismos</a></li>
														<li><a href="#">Estadísticas del Catálogo</a></li>
														<li><a href="#">Guías para visualizaciones</a></li>
														-->
													</ul>
											</div>
										</div>
									</div>
									<div class="Module-item Module-item--1of3">
										<a href="cda-formulario-single.php" class="Box Box--mf Box--acceso Box--color4">
											<div class="Flag">
													<div class="Flag-image">
															<img src="./img/icono_mail_color.jpg" alt="Ícono de correo">
													</div>
													<div class="Flag-body">
															<span class="Box-title">Ayudanos a mejorar</span>
														<span class="Box-info">Dejá tu opinión y tus ideas. Consideramos todas las sugerencias para mejorar nuestros contenidos.</span>
													</div>
											</div>
										</a>
									</div>		
								</div>
            </div>
        </div>
			</div>
		</div>
	
		<div class="Container">
			
			<div class="Module Module--sm">
				<div class="Grid">
						<div class="Grid-item u-md-size3of3">
								<div class="Module-item Module-item--3of3">
										<div class="Box Box--mf Box--listadoAccesos Box--color2">
											<div class="Box-header">
													<h3 class="Box-name">Aplicaciones y uso de datos más populares</h3>
											</div>
											<div class="Box-body">
													<!--<p class="Box-text">Texto adicional de la variante con imagen en tres columnas.</p>-->
													<ul class="Box-gridList Grid Grid--rowSize3">
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/app-coronavirus-uy-app-store">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/appCoronavirus.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">App Coronavirus</span>
																		</div>
																	</div>
																</a>
															</li>
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/montevideo-en-bici">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/montevideoEnBici.jpg" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">Montevideo en bici</span>
																		</div>
																	</div>
																</a>
															</li>
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/como-ir">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/comoIr.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">Como Ir</span>
																		</div>
																	</div>
																</a>
															</li>
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/preciosgub">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/preciosGub.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">Precios Gub</span>
																		</div>
																	</div>
																</a>
															</li>
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/dondereciclo">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/dondeReciclo.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">Donde reciclo</span>
																		</div>
																	</div>
																</a>
															</li>
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/a-tu-servicio">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/aTuServicio.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">A tu servicio</span>
																		</div>
																	</div>
																</a>
															</li>
															<!--
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/visualizador-del-indice-nacional-de-transparencia-y-acceso-a-la-informacion-intai">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/visualizadorUaip.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">Visualizador del Índice Nacional de Transparencia y Acceso a la Información</span>
																		</div>
																	</div>
																</a>
															</li>
															<li class="Grid-item">
																<a href="https://catalogodatos.gub.uy/showcase/app-a-tu-nombre-udelar">
																	<div class="Flag">
																		<div class="Flag-image">
																				<img class="u-circle" src="./img/aTuNombre.png" alt="Logo">
																		</div>
																		<div class="Flag-body">
																				<span class="Box-title">A tu nombre - UDELAR</span>
																		</div>
																	</div>
																</a>
															</li>
															-->
													</ul>
											</div>
											<div class="Box-footer">
													<a href="https://catalogodatos.gub.uy/showcase/" class="Box-more">Ver más aplicaciones y usos de datos</a>
											</div>
									</div>
								</div>
						</div>
				</div>
			</div>
			
			<!--
			<div class="Module">
				<div class="Grid">
					<div class="Grid-item u-md-size3of3">
						<div class="Module-item">
							<div class="Box Box--mf Box--microaccesos">
								<div class="Box-header">
									<h3 class="Box-name"><a href="https://catalogodatos.gub.uy/showcase/">Aplicaciones y uso de datos más populares</a></h3>
								</div>
								<div class="Box-body">
									<div class="Microaccesos-item">
									 <a href="https://catalogodatos.gub.uy/showcase/app-coronavirus-uy-app-store">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/appCoronavirus.png" alt="Logo">
												</div>
												<div class="Flag-body">
														<span class="Box-title">App Coronavirus</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
									 <a href="https://catalogodatos.gub.uy/showcase/montevideo-en-bici">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/montevideoEnBici.jpg" alt="Logo">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Montevideo en bici</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
									 <a href="https://catalogodatos.gub.uy/showcase/como-ir">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/comoIr.png" alt="Logo">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Como ir</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
									 <a href="https://catalogodatos.gub.uy/showcase/preciosgub">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/preciosGub.png" alt="Logo">
												</div>
												<div class="Flag-body">
														<span class="Box-title">PreciosGub</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
										<a href="https://catalogodatos.gub.uy/showcase/dondereciclo">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/dondeReciclo.png" alt="Logo">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Dónde Reciclo</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
										<a href="https://catalogodatos.gub.uy/showcase/a-tu-servicio">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/aTuServicio.png" alt="Logo">
												</div>
												<div class="Flag-body">
														<span class="Box-title">A tu servicio</span>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			-->
		</div>

  </div>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
