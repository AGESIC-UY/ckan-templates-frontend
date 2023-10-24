<!-- Panel de filtros de página  -->
<form action="./" class="Form Form--stacked u-textSmall">
	<div class="Grid">
		<div class="Form-group Grid-item u-sm-size1of2 u-md-size1of4">
			<label for="tipo-organismo2" class="Form-label">Organismo:</label>
			<select id="tipo-organismo2" title="Por tipo de organismo" class="Form-widget">
				<option value="-1" selected="">Todos</option>
				<option value="16">Poder Ejecutivo </option>
				<option value="17">Poder Legislativo</option>
				<option value="18">Órganos constitucionales de control</option>
				<option value="19">Poder Judicial</option>                                    
			</select>
		</div>

		<div class="Form-group Grid-item u-sm-size1of2 u-md-size1of4">
			<label for="corrida" class="Form-label">Análisis:</label>
			<select id="corrida" title="Fecha de análisis" class="Form-widget">
				<option value="7" selected="">Revisión de marzo de 2023</option>
				<option value="6">Revisión de octubre de 2022</option>
				<option value="5">Revisión setiembre 2022</option>
				<option value="1">Prueba</option>
			</select>
		</div>

		<div class="Form-group Grid-item u-sm-size1of2 u-md-size1of4">
			<label for="tipo-organismo" class="Form-label">Tipo de organismo:</label>
			<select id="tipo-organismo" title="Por tipo de organismo" class="Form-widget">
				<option value="-1" selected="">Todos</option>
				<option value="8">Entes Autónomos</option>
				<option value="9">Servicios Descentralizados</option>
				<option value="11">Personas Públicas no Estatales</option>
				<option value="15">Gobiernos Departamentales y Congreso de Intendentes</option>
				<option value="16">Poder Ejecutivo </option>
				<option value="17">Poder Legislativo</option>
				<option value="18">Órganos constitucionales de control</option>
				<option value="19">Poder Judicial</option>                                    
			</select>
		</div>

		<div class="Form-group Grid-item u-sm-size1of2 u-md-size1of4">
			<label for="corrida2" class="Form-label">Análisis:</label>
			<select id="corrida2" title="Fecha de análisis" class="Form-widget">
					<option value="7" selected="">Revisión de marzo de 2023</option>
					<option value="6">Revisión de octubre de 2022</option>
					<option value="5">Revisión setiembre 2022</option>
					<option value="1">Prueba</option>
			</select>
		</div>
		
		<div class="Form-group Grid-item u-textRight">
			<button class="Button Button--primary" type="submit">Aplicar filtros</button>
		</div>
	</div>
	
</form>