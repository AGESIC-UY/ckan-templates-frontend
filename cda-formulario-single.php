<?php
 $title = 'Ejemplo de formulario | Catálogo de Datos Abiertos';
?>
    <?php include "inc/head.php"; ?>

        <!-- Cabezal -->
        <?php include "inc/header.php"; ?>

            <!-- contenido -->
            <div class="u-main">
                <div class="Container">
                    <div class="Grid">
                        <div class="Grid-item Grid-item--center u-md-size8of10">
                            <div class="Page">
                                <h2 class="Page-title">Ejemplo de formulario</h2>

                                <div class="Steps">
                                    <div class="Steps-inner">
                                        <a href="#" class="Steps-item is-finished">
                                            <div>
                                                <span class="Steps-number">1.</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#23C277">
                                                    <path d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                                </svg>
                                            </div>
                                            <div>Nombre del paso completado</div>
                                        </a>
                                        <a href="#" class="Steps-item is-active">
                                            <div>
                                                <span class="Steps-number">2.</span>
                                            </div>
                                            <div>Nombre del paso actual</div>
                                        </a>
                                        <a href="#" class="Steps-item">
                                            <div>
                                                <span class="Steps-number">3.</span>
                                            </div>
                                            <div>Nombre del tercer paso</div>
                                        </a>
                                        <a href="#" class="Steps-item">
                                            <div>
                                                <span class="Steps-number">4.</span>
                                            </div>
                                            <div>Nombre del cuarto paso</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="Alert Alert--dialog Alert--danger">
                                    <p class="u-textMedium">Hay <strong>3 errores</strong> en el formulario</p>

                                    <ol>
                                        <li><a href="#">Debe ingresar una fecha</a></li>
                                        <li><a href="#">Lorem ipsum ad his scripta</a></li>
                                        <li><a href="#">Blandit incorrupte quaerendum in quo</a></li>
                                    </ol>
                                </div>

                                <form class="Form u-mt4" action="./">
                                    <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                                    <fieldset>
                                        <legend>
                                            <span>Título del grupo de campos</span>
                                        </legend>

                                        <div class="Form-group">
                                            <label class="Form-label" for="example">Etiqueta de campo común:</label>
                                            <input class="Form-widget" name="example" type="text" id="example">
                                        </div>

                                        <div class="Form-group">
                                            <label class="Form-label" for="example1">Etiqueta de campo mediano:</label>
                                            <input class="Form-widget Form-widget--medium" name="example1" type="text" id="example1">
                                        </div>

                                        <div class="Form-group">
                                            <label class="Form-label" for="example2">Etiqueta de campo chico:</label>
                                            <input class="Form-widget Form-widget--small" name="example2" type="text" id="example2">
                                        </div>

                                        <div class="Form-group Form-group--disabled">
                                            <label class="Form-label" for="example3">Etiqueta de campo deshabilitado:</label>
                                            <input class="Form-widget" type="text" id="example3" name="example3" disabled>
                                        </div>

                                        <div class="Form-group">
                                            <label for="example4" class="Form-label">Etiqueta de campo de área de texto:</label>
                                            <textarea name="example4" id="example4" class="Form-widget"></textarea>
                                        </div>

                                        <div class="Form-group Form-group--error">
                                            <label class="Form-label" for="example5">Etiqueta de campo con error:</label>
                                            <input class="Form-widget" name="example5" type="text" id="example5">
                                            <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                                        </div>

                                        <div class="Form-group">
                                            <label class="Form-label" for="example6">Etiqueta de campo con ayuda:</label>
                                            <input class="Form-widget" name="example6" type="text" id="example6">
                                            <div class="Form-hint">Este es un texto de ayuda</div>
                                        </div>

                                        <div class="Form-group">
                                            <label class="Form-label" for="example7">Etiqueta de campo con placeholder:</label>
                                            <input class="Form-widget" name="example7" type="text" id="example7" placeholder="Este es un texto de soporte">
                                        </div>

                                        <div class="Form-group">
                                            <label for="combo1" class="Form-label">Etiqueta de combo:</label>
                                            <select name="combo1" id="combo1" class="Form-widget">
                                                <option value="0">Opción seleccionada de un combo</option>
                                                <option value="1">Opción 1</option>
                                                <option value="2">Opción 2</option>
                                                <option value="3">Opción 3</option>
                                            </select>
                                        </div>

                                        <div class="Form-group">
                                            <label for="fecha" class="Form-label">Fecha:</label>
                                            <input type="date" id="fecha" class="Form-widget Form-widget--medium">
                                        </div>

                                        <div class="Form-group">
                                            <label class="Form-label" for="archivos">Archivos:</label>
                                            <input class="Form-widget" id="archivos" type="file">
                                        </div>

                                        <div class="Form-group">
                                            <label for="options1" class="Form-label">Grupo de opciones de checkboxes:</label>
                                            <div class="Form-options">
                                                <label for="opcion_check_3" class="Form-option">
                                                    <input type="checkbox" id="opcion_check_3" name="opciones_check_2">
                                                    <span>Opción 1</span>
                                                </label>

                                                <label for="opcion_check_4" class="Form-option">
                                                    <input type="checkbox" id="opcion_check_4" name="opciones_check_2">
                                                    <span>Opción 2</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="Form-group Form-group--error">
                                            <label for="options2" class="Form-label">Grupo de opciones con error:</label>
                                            <div class="Form-options">
                                                <label for="opcion_check_5" class="Form-option">
                                                    <input type="checkbox" id="opcion_check_5" name="opciones_check">
                                                    <span>Opción 1</span>
                                                </label>
                                                <label for="opcion_check_6" class="Form-option">
                                                    <input type="checkbox" id="opcion_check_6" name="opciones_check">
                                                    <span>Opción 2</span>
                                                </label>
                                            </div>

                                            <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                                        </div>

                                        <fieldset class="u-mb1 u-mt3">
                                            <legend><span>Grupo de campos solo lectura</span></legend>

                                            <div class="Form-group u-py1">
                                                <div class="Form-label">Nombre completo:</div>
                                                <div class="Form-widget Form-widget--read">Juan Ignacio Rodríguez</div>
                                            </div>

                                            <div class="Form-group u-py1">
                                                <div class="Form-label">Documento de Identidad:</div>
                                                <div class="Form-widget Form-widget--read">
                                                    <p>4.520.878-4</p>
                                                    <p>Otro valor para el mismo campo</p>
                                                </div>
                                            </div>

                                            <div class="Form-group u-py1">
                                                <div class="Form-label">Fecha de Nacimiento:</div>
                                                <div class="Form-widget Form-widget--read">12/10/1990</div>
                                            </div>
                                        </fieldset>
                                        <a href="#">+ Agregar otro grupo</a>

                                        <fieldset class="u-mt2">
                                            <legend>
                                                <span>Tipos de datos especiales</span>
                                            </legend>

                                            <div class="Form-group">
                                                <label class="Form-label" for="telefono">Teléfono:</label>
                                                <input type="tel" class="Form-widget" id="telefono" name="telefono" />
                                            </div>

                                            <div class="Form-group">
                                                <label class="Form-label" for="correo">Correo electrónico:</label>
                                                <input type="email" class="Form-widget" id="correo" name="correo" />
                                            </div>

                                            <div class="Form-group">
                                                <label class="Form-label" for="direccion_url1">Dirección URL:</label>
                                                <input type="url" class="Form-widget" id="direccion_url1" name="direccion_url1" />
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <legend>
                                                <span>Campos con indicadores</span>
                                            </legend>

                                            <div class="Form-group">
                                                <label class="Form-label" for="direccion_url2">Con tooltip de ayuda:</label>
                                                <input type="url" class="Form-widget" id="direccion_url2" name="direccion_url2" />
                                                <div class="Form-valid" title="Rol validado">
                                                    <span class="u-hideVisually">Rol Validado</span>
                                                </div>
                                            </div>

                                            <div class="Form-group">
                                                <label class="Form-label" for="direccion_url3">Con tooltip de ayuda:</label>
                                                <input type="url" class="Form-widget" id="direccion_url3" name="direccion_url3" />
                                                <button class="Form-help" type="button">
                                                    <span aria-hidden="true">?</span>
                                                    <span class="u-hideVisually">Ayuda</span>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </fieldset>
                                    <div class="Form-actions">
                                        <div>
                                            <button class="Button Button--link" type="button">Cancelar</button>
                                        </div>

                                        <div>
                                            <button class="Button" type="button">Acción secundaria</button>
                                            <button class="Button Button--primary">Acción primaria</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <?php include "inc/footer.php"; ?>

                <?php include "inc/foot.php"; ?>