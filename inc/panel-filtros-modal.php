<!-- Panel de filtros en formato modal -->
<div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<button type="button" class="close u-right u-p1 u-px2" data-dismiss="modal" aria-label="Cerrar filtros"></button>
			<div class="modal-body u-mx4 u-pb5 u-pt6">					
				
				<form action="./" class="Form Form--stacked Form--filters u-px0">	
					
					<fieldset>
						<legend class="u-mb0 u-pb1">
							<span id="modalTitle" class="u-h4">Filtros</span>
						</legend>

						<div class="Form-group">
							<label for="etiqueta1" class="Form-label">Etiqueta filtro 1:</label>
							<select name="etiqueta1" id="etiqueta1" class="Form-widget">
								<option value="0">Todas</option>
								<option value="1">Opción 1</option>
								<option value="2">Opción 2</option>
								<option value="3">Opción 3</option>
							</select>
						</div><div class="Form-group">
							<label for="etiqueta2" class="Form-label">Etiqueta filtro 2:</label>
							<select name="etiqueta2" id="etiqueta2" class="Form-widget">
								<option value="0">Todas</option>
								<option value="1">Opción 1</option>
								<option value="2">Opción 2</option>
								<option value="3">Opción 3</option>
							</select>
						</div> 
						<div class="Form-group">
							<label for="etiqueta3" class="Form-label">Etiqueta filtro 3:</label>
							<select name="etiqueta3" id="etiqueta3" class="Form-widget">
								<option value="0">Todas</option>
								<option value="1">Opción 1</option>
								<option value="2">Opción 2</option>
								<option value="3">Opción 3</option>
							</select>
						</div><div class="Form-group">
							<label for="etiqueta4" class="Form-label">Etiqueta filtro 4:</label>
							<select name="etiqueta4" id="etiqueta4" class="Form-widget">
								<option value="0">Todas</option>
								<option value="1">Opción 1</option>
								<option value="2">Opción 2</option>
								<option value="3">Opción 3</option>
							</select>
						</div>																
					</fieldset>
					
					<div class="Form-actions u-mt3">
						<div class="u-mt2">
							<button class="Button Button--link" type="button" data-dismiss="modal">Cancelar</button>
						</div>
						<div class="">
							<button class="Button Button--primary" type="submit">Aplicar filtros</button>
						</div>
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
</div>