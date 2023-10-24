<?php
$title = 'Visualizador de Datos Abiertos y Estadísticas';
?>
<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header-visualizador.php"; ?>

<!-- Breadcrumb -->
<!--
<div class="Breadcrumb">
	<div class="Container">
		<ul>
			<li><a href="cda-home.php">Inicio</a></li>
			<li>Sobre el Catálogo</li>
		</ul>
	</div>
</div>
-->

	<div class="Group Group--color1 UN-cabezal u-pb4">
		<div class="Container">
			<div class="UN-cabezal-header">
			 <h2 class="Group-title UN-cabezal-title">Nombre de la página</h2>
				<!-- Filtros de página  -->
				<div class="u-pt1 u-md-pt2">
					<?php include "inc/panel-filtros.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<div id="contenido" class="u-main">
    <div class="Container">
     	
			<!-- Para que funcione correctamente el Módulo 3x3 debe ponerse una clase de tamaño que determine la altura -->
			<div class="Module Module--panel Module--xl">
				<div class="Grid">
						<div class="Grid-item u-md-size3of3">
								<div class="Module-item">
										<div class="Box Box--mf Box--color3">
											<div class="Box-header">
												<h3 class="Box-name">Nombre del panel</h3>
												<ul class="Page-actions panel-acciones u-right">
													<!-- Solo filtros, se elimina el otro elemento de lista -->
													<li>
														<button class="u-p1 Button Button--filters u-hide u-md-show" type="button" data-toggle="modal" data-target="#modalExample" aria-label="Abrir filtros"><span class="Icon Icon--filtros"></span>Filtros</button>
														<button class="u-p1 Button Button--filters u-md-hide" type="button" data-toggle="modal" data-target="#modalExample" aria-label="Abrir filtros"><span class="Icon Icon--filtros"></button>
													</li>
												</ul>	
											</div>
											<div class="Tags u-mb3">
												<a href="#" class="Tags-item Tags-item--selected u-textSmall">Filtro 1</a>
												<a href="#" class="Tags-item Tags-item--selected u-textSmall">Filtro 2 aplicado</a>
											</div>
												
											<div class="Box-body Grid">
												<div class="Grid-item u-md-size1of3">
													<div class="subpanel-titulo u-mb2">
														<h4 class="u-h5">Título de subpanel 1</h4>
														<button class="Button Button--white Button--small u-px1 u-right" aria-label="Descargar datos"><span class="Icon Icon--download-blue"></span></button>
													</div>
													<div class="subpanel-contenido u-mb3">
														<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
														Acá se carga la visualización de datos [borrar texto]
													</div>
												</div>
												<div class="Grid-item u-md-size1of3">
													<div class="subpanel-titulo u-mb2">
														<h4 class="u-h5">Título de subpanel 2</h4>
														<button class="Button Button--white Button--small u-px1 u-right" aria-label="Descargar datos"><span class="Icon Icon--download-blue"></span></button>
													</div>
													<div class="subpanel-contenido u-mb3">
														<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
														Acá se carga la visualización de datos [borrar texto]
													</div>
												</div>
												<div class="Grid-item u-md-size1of3">
													<div class="subpanel-titulo u-mb2">
														<h4 class="u-h5">Título de subpanel 3 con título de dos líneas</h4>
														<button class="Button Button--white Button--small u-px1 u-right" aria-label="Descargar datos"><span class="Icon Icon--download-blue"></span></button>
													</div>
													<div class="subpanel-contenido u-mb3">
														<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
														Acá se carga la visualización de datos [borrar texto]
													</div>
												</div>
											</div>
											
											<div class="Box-footer Box-footer--panel">
												<div class="">
													<p class="u-textLeft u-mb0">
														Para el cálculo del nivel de cumplimiento se promediaron únicamente los puntajes de los organismos que respondieron el formulario de autoevaluación. <a href="#">Acceder a la información completa de la metodología</a>
													</p>
												</div>
											</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		
		<!-- Para que funcione correctamente el Módulo 3x3 debe ponerse una clase de tamaño que determine la altura -->
		<div class="Module Module--panel Module--lg">
				<div class="Grid">
						<div class="Grid-item u-md-size2of3">
								<div class="Module-item">
										<div class="Box Box--mf Box--color7">
											<div class="Box-header">
												<h3 class="Box-name u-h4">Nombre del panel con nombre largo en móvil</h3>
												<ul class="Page-actions panel-acciones u-right">
													<li>
														<button class="u-p1 Button Button--filters u-hide u-md-show" type="button" data-toggle="modal" data-target="#modalExample" aria-label="Abrir filtros"><span class="Icon Icon--filtros"></span>Filtros</button>
														<button class="u-p1 Button Button--filters u-md-hide" type="button" data-toggle="modal" data-target="#modalExample" aria-label="Abrir filtros"><span class="Icon Icon--filtros"></button>
													</li>
													<li>
														<button class="Button Button--white Button--small Button--download u-px1" aria-label="Descargar datos"><span class="Icon Icon--download-blue"></span></button>    
													</li>
												</ul>	
											</div>
											<div class="Tags u-mb3">
												<a href="#" class="Tags-item Tags-item--selected u-textSmall">Filtro 1</a>
												<a href="#" class="Tags-item Tags-item--selected u-textSmall">Filtro 2 aplicado</a>
											</div>
											<div class="Box-body">
												<div class="panel-contenido u-mb3">
													<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
													Acá se carga la visualización de datos [borrar texto]
												</div>
											</div>
											<div class="Box-footer Box-footer--panel">
												<p class="u-textLeft u-mb0">Información adicional sobre los datos que se muestran en el panel. <a href="#">Acceder a metodología completa</a></p>
											</div>
										</div>
								</div>
						</div>
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item">
										<div class="Box Box--mf  Box--color7">
											<div class="Box-header">
												<h3 class="Box-name u-h4">Nombre del panel con nombre largo</h3>
												<ul class="Page-actions panel-acciones u-right">
													<!-- Solo descargas, se elimina el otro elemento de lista -->
													<li>
														<button class="Button Button--white Button--small Button--download u-px1" aria-label="Descargar datos"><span class="Icon Icon--download-blue"></span></button>    
													</li>
												</ul>	
											</div>
											<div class="Box-body">
												<div class="panel-contenido u-mb3">
													<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
													Acá se carga la visualización de datos [borrar texto]
												</div>
											</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		
		<!-- Para que funcione correctamente el Módulo 3x3 debe ponerse una clase de tamaño que determine la altura -->	
		<div class="Module Module--panel Module--md">
				<div class="Grid">
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item">
										<div class="Box Box--mf Box--color1">
											<div class="Box-header">
												<h3 class="Box-name u-h4">Nombre del panel</h3>
												<ul class="Page-actions panel-acciones u-right">
													<!-- Solo filtros, se elimina el otro elemento de lista -->
													<li>
														<button class="u-p1 Button Button--filters u-hide u-md-show" type="button" data-toggle="modal" data-target="#modalExample" aria-label="Abrir filtros"><span class="Icon Icon--filtros"></span>Filtros</button>
														<button class="u-p1 Button Button--filters u-md-hide" type="button" data-toggle="modal" data-target="#modalExample" aria-label="Abrir filtros"><span class="Icon Icon--filtros"></button>
													</li>
												</ul>	
											</div>
											<div class="Box-body">
												<div class="panel-contenido u-mb3">
													<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
													Acá se carga la visualización de datos [borrar texto]
												</div>
											</div>
											<div class="Box-footer Box-footer--panel">
												<p class="u-textLeft u-mb0">Información adicional sobre los datos que se muestran en el panel. <a href="#">Acceder a metodología completa</a></p>
											</div>
										</div>
								</div>
						</div>
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item">
										<div class="Box Box--mf Box--color1">
											<div class="Box-header">
												<h3 class="Box-name u-h4">Nombre del panel</h3>
												<ul class="Page-actions panel-acciones u-right">
													<!-- Solo descargas, se elimina el otro elemento de lista -->
													<li>
														<button class="Button Button--white Button--small Button--download u-px1" aria-label="Descargar datos"><span class="Icon Icon--download-blue"></span></button>    
													</li>
												</ul>	
											</div>
											<div class="Box-body">
												<div class="panel-contenido u-mb3">
													<!-- Dentro de este div se debe cargar la visualización de datos, lo esperable sería darle un alto fijo para ajustar a una correcta visualización -->
													Acá se carga la visualización de datos [borrar texto]
												</div>
											</div>
										</div>
								</div>
						</div>
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item">
										<div class="Box Box--mf Box--color1">
											<div class="Box-header">
													<h3 class="Box-name u-h4">Nombre del panel</h3>
											</div>
											<div class="Box-body">
												<div class="Alert">
													 No se encontraron datos para los filtros seleccionados.
												</div>
											</div>
										</div>
								</div>
						</div>
				</div>
		</div>
		
		<!-- Para que funcione correctamente el Módulo 3x3 debe ponerse una clase de tamaño que determine la altura -->	
		<div class="Module Module--120">
				<div class="Grid">
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item Module-item--3of3">
										<a href="#" class="Box Box--mf Box--acceso Box--color2">
												<div class="Flag">
														<div class="Flag-image">
																<img src="./img/60x60.png" alt="">
														</div>
														<div class="Flag-body">
																<span class="Box-title">Acceder a metodología</span>
																<span class="Box-info">Información adicional del acceso destacado</span>
														</div>
												</div>
										</a>
								</div>
						</div>
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item Module-item--3of3">
										<a href="#" class="Box Box--mf Box--acceso Box--color6">
												<div class="Flag">
														<div class="Flag-image">
																<img src="./img/60x60.png" alt="">
														</div>
														<div class="Flag-body">
																<span class="Box-title">Acceder a datos de imputaciones y condenas a personas</span>
														</div>
												</div>
										</a>
								</div>
						</div>
						<div class="Grid-item u-md-size1of3">
								<div class="Module-item Module-item--3of3">
										<a href="#" class="Box Box--mf Box--acceso Box--color3">
												<div class="Flag">
														<div class="Flag-image">
																<img src="./img/60x60.png" alt="">
														</div>
														<div class="Flag-body">
																<span class="Box-title">Catálogo de Datos Abiertos</span>
																<span class="Box-info">Información adicional</span>
														</div>
												</div>
										</a>
								</div>
						</div>
						
				</div>
		</div>

  </div>
</div>

<!-- Se deben cargar los filtros de los diferentes paneles -->
<?php include "inc/panel-filtros-modal.php"; ?>


<!-- Footer -->
<?php include "inc/footer-visualizador.php"; ?>

<?php include "inc/foot.php"; ?>