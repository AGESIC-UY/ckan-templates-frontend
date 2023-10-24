<?php
  $title = 'Carga de conjunto de Datos Abiertos';
  $form = false;
?>
  <?php include "inc/head.php"; ?>

    <!-- Cabezal -->
    <?php include "inc/header.php"; ?>

      <!-- Contenido -->
      <main class="u-main" id="contenido">
        <div class="Container">
          <div class="Grid">
            <div class="Grid-item Grid-item--center u-md-size8of10">
              <div class="Page">
                <h2 class="Page-title">Carga de conjunto de Datos Abiertos</h2>

                <p class="Page-description"></p>

                <form class="Form" action="./">
                  <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                  <fieldset>
                    <legend><span>Carga de datos y recursos</span></legend>

                    <div class="Form-group">
                      <label for="cargas" class="Form-label">Historial de cargas:</label>
                      <select name="cargas" id="cargas" class="Form-widget">
                        <option value="0" selected disabled>Seleccioná una carga del historial</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                      </select>
                    </div>

                    <div class="Form-group">
                      <label for="plantillas" class="Form-label">Plantillas:</label>
                      <select name="plantillas" id="plantillas" class="Form-widget">
                        <option value="0" selected disabled>Seleccioná una plantilla</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                      </select>
                    </div>

                    <div class="Form-group">
                      <label for="organismo" class="Form-label">Organismo:</label>
                      <select name="organismo" id="organismo" class="Form-widget">
                        <option value="0" selected disabled>Seleccioná un organismo</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                      </select>
                    </div>

                    <div class="Form-group">
                      <label class="Form-label" for="carga-archivo">Cargar archivo:</label>
                      <input class="Form-widget" id="carga-archivo" type="file">
                    </div>

                    <fieldset class="u-mt4">
                      <legend><span>Información del conjunto de datos</span></legend>

                      <div class="Form-group">
                        <label for="titulo" class="Form-label">Título:*</label>
                        <input type="text" id="titulo" name="titulo" class="Form-widget" placeholder="Título del conjunto de datos">
                      </div>

                      <div class="Form-group">
                        <label for="nombre" class="Form-label">Nombre:*</label>
                        <input type="text" id="nombre" name="nombre" class="Form-widget" placeholder="ej: mi_conjunto_de_datos">
                        <div class="Form-hint">No debe tener espacios, mayúsculas o carácteres especiales.</div>
                      </div>

                      <div class="Form-group">
                        <label for="descripcion" class="Form-label">Descripción:*</label>
                        <textarea name="descripcion" id="descripcion" class="Form-widget" placeholder="Descripción del conjunto de datos"></textarea>
                      </div>

                      <div class="Form-group">
                        <label for="visibilidad" class="Form-label">Visibilidad:</label>
                        <select name="visibilidad" id="visibilidad" class="Form-widget">
                          <option value="0" selected disabled>Seleccioná la visibilidad</option>
                          <option value="1">Opción 1</option>
                          <option value="2">Opción 2</option>
                          <option value="3">Opción 3</option>
                        </select>
                      </div>

                      <div class="Form-group">
                        <label for="fuente" class="Form-label">Fuente:</label>
                        <input type="text" id="fuente" name="fuente" class="Form-widget" placeholder="Enlace al sitio del organismo">
                      </div>

                      <div class="Form-group">
                        <label for="version" class="Form-label">Versión:</label>
                        <input type="text" id="version" name="version" class="Form-widget" placeholder="Versión del conjunto de datos (número entero)">
                      </div>

                      <div class="Form-group">
                        <label for="categorias" class="Form-label">Categorías:</label>
                        <select name="categorias" id="categorias" class="Form-widget">
                          <option value="0" disabled selected>Seleccioná una categoría</option>
                          <option value="1">Categoría 1</option>
                          <option value="2">Categoría 2</option>
                          <option value="3">Categoría 3</option>
                        </select>
                        <a href="#" class="Button Button--link Button--small">+ Agregar otra categoría</a>
                      </div>

                      <div class="Form-group">
                        <label for="autor" class="Form-label">Autor:</label>
                        <input type="text" id="autor" name="autor" class="Form-widget">
                      </div>

                      <div class="Form-group">
                        <label for="email-autor" class="Form-label">Correo electrónico del autor:</label>
                        <input type="email" id="email-autor" name="email-autor" class="Form-widget" placeholder="correo@dominio.com">
                      </div>

                      <div class="Form-group">
                        <label for="mantenedor" class="Form-label">Mantenedor:</label>
                        <input type="text" id="mantenedor" name="mantenedor" class="Form-widget">
                      </div>

                      <div class="Form-group">
                        <label for="email-mantenedor" class="Form-label">Correo electrónico del mantenedor:</label>
                        <input type="email" id="email-mantenedor" name="email-mantenedor" class="Form-widget" placeholder="correo@dominio.com">
                      </div>
                    </fieldset>

                    <fieldset>
                      <legend><span>Información de los recursos</span></legend>

                      <div class="Form-group">
                        <label for="nombre-recurso" class="Form-label">Nombre del recurso:</label>
                        <input type="text" id="nombre-recurso" name="Nombre datos del recurso" class="Form-widget">
                      </div>

                      <div class="Form-group">
                        <label for="descripcion-recurso" class="Form-label">Descripción del recurso:</label>
                        <textarea name="Descripcion datos del recurso" id="descripcion-recurso" class="Form-widget"></textarea>
                      </div>

                      <div class="Form-group">
                        <label for="nombre-metadatos" class="Form-label">Nombre de los metadatos del recurso:</label>
                        <input type="text" id="nombre-metadatos" name="Nombre metadatos del recurso" class="Form-widget">
                      </div>

                      <div class="Form-group">
                        <label for="descripcion-metadatos" class="Form-label">Descripción de los metadatos del recurso:</label>
                        <textarea name="Descripcion metadatos del recurso" id="descripcion-metadatos" class="Form-widget"></textarea>
                      </div>

                      <div class="Form-group">
                        <label for="frecuencia-actualizacion" class="Form-label">Frecuencia de actualización de los datos:</label>
                        <select name="Frecuencia de actualizacion" id="frecuencia-actualizacion" class="Form-widget">
                          <option value="0" selected disabled>Seleccioná una frecuencia de actualización</option>
                          <option value="1">Opción 1</option>
                          <option value="2">Opción 2</option>
                          <option value="3">Opción 3</option>
                        </select>
                      </div>
                      
                      <div class="Form-group">
                        <label for="sistema-referencia" class="Form-label">Sistema de referencia:</label>
                        <input type="text" id="sistema-referencia" name="Sistema de referencia" class="Form-widget" placeholder="ej: SIRGAS-ROU98">
                        <div class="Form-hint">Aplica cuando se publican datos geográficos</div>
                      </div>
                      
                      <div class="Form-group">
                        <label for="cobertura-espacial" class="Form-label">Cobertura espacial:</label>
                        <input type="text" id="cobertura-espacial" name="Cobertura espacial" class="Form-widget" placeholder="ej: Uruguay">
                      </div>
                      
                      <div class="Form-group">
                        <label for="cobertura-temporal" class="Form-label">Cobertura temporal:</label>
                        <input type="text" id="cobertura-temporal" name="Cobertura temporal" class="Form-widget" placeholder="ej: 2018">
                        <div class="Form-hint">Período de fecha al que pertenecen los datos</div>
                      </div>

                    </fieldset>

                  </fieldset>

                  <div class="Form-actions">
                    <button type="button" class="Button Button--link">Cancelar</button>
                    <button class="Button Button--primary">Publicar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- Footer -->
      <?php include "inc/footer.php"; ?>

        <?php include "inc/foot.php"; ?>