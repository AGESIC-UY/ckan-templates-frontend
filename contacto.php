<?php
  $title = 'Contacto';
  $form = true;
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>
  
  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="cda-home.php">Inicio</a></li>
        <li><a href="#">Sobre el Catálogo</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item u-md-size8of10 Grid-item--center">
          <div class="Page">
            <h2 class="Page-title">Contacto</h2>

            <p class="Page-description">Podés contactar con nosotros por medio del formulario de esta página, se
              te enviará una copia del mensajea la casilla de correo electrónico que
              ingreses.</p>

            <form action="#">
              <p class="form-required u-mb0">Los campos indicados con <span>*</span> son obligatorios</p>

              <fieldset>
                <legend>Datos de contacto</legend>

                <fieldset>
                  <legend>Información personal</legend>
                  <ul class="form-group-list">
                    <li>
                      <label for="nombre">Nombre completo:
                        <span class="required">*</span>
                      </label>
                      <input id="nombre" name="nombre" type="text" value="" placeholder="Escribí tu nombre completo">
                    </li>
                    <li>
                      <label for="tel">Teléfono (opcional):</label>
                      <input id="tel" name="tel" type="tel" value="" placeholder="Teléfono para poder contactarte">
                    </li>
                    <li>
                      <label for="email">Correo electrónico:
                        <span class="required">*</span>
                      </label>
                      <input id="email" name="email" type="text" value="" placeholder="correo@dominio.com">
                    </li>
                    <li>
                      <label class="textarea" for="consulta">Consulta:
                        <span class="required">*</span>
                      </label>
                      <ul class="group-list">
                        <li>
                          <textarea id="consulta" name="consulta" placeholder="Escribí tu consulta"></textarea>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <label for="archivo">Archivo (opcional):</label>
                      <input id="archivo" name="archivo" type="file">
                    </li>
                  </ul>
                </fieldset>

                <fieldset>
                  <legend>Cláusula de consentimiento informado</legend>
                  <p>
                    <em>"De conformidad con la Ley N° 18.331, de 11 de agosto de 2008,
                      de Protección de Datos Personales y Acción de Habeas Data (LPDP),
                      los datos suministrados por usted quedarán incorporados en una
                      base de datos, la cual será procesada exclusivamente para la
                      siguiente finalidad: **Objetivo del formulario**.</em>
                  </p>
                  <p>Los datos personales serán tratados con el grado de protección adecuado,
                    tomándose las medidas de seguridad necesarias para evitar su alteración,
                    pérdida, tratamiento o acceso no autorizado por parte de terceros
                    que lo puedan utilizar para finalidades distintas para las que
                    han sido solicitadas al usuario.</p>
                  <p>El responsable de la base de datos es **Titular de la base** y la
                    dirección donde podrá ejercer los derechos de acceso, rectificación,
                    actualización, inclusión o supresión, es **Dirección del organismo**,
                    según lo establecido en la LPDP".</p>
                  <ul class="form-group-list">
                    <li>
                      <span class="label label-align-top">Términos de la cláusula:
                        <span class="required">*</span>
                      </span>
                      <ul class="group-list">
                        <li>
                          <label for="acepta">
                            <input type="radio" id="acepta" name="contacto" value="opcionUno" title="Acepto los términos">
                            <span>Acepto los términos</span>
                          </label>
                        </li>
                        <li>
                          <label for="no-acepta">
                            <input type="radio" id="no-acepta" name="contacto" value="opcionDos" title="No acepto los términos">
                            <span>No acepto los términos (no se enviará el mensaje)</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </fieldset>

                <fieldset>
                  <legend>Verificación de seguridad</legend>
                  <ul class="form-group-list">
                    <li>
                      <label for="comprobacion">Comprobación de seguridad:
                        <span class="required">*</span>
                      </label>
                      <ul class="group-list">
                        <li>Escribe la tercera palabra de: Hoy está lloviendo</li>
                        <li>
                          <input type="text" id="comprobacion" name="comprobacion" title="Comprobación de seguridad">
                        </li>
                      </ul>
                    </li>
                  </ul>
                </fieldset>

              </fieldset>
              <button class="Button Button--primary u-right">Enviar formulario</button>
            </form>
          </div>
        </div>
		<!--
        <div class="Grid-item u-md-size3of10">
          <div class="Box">
            <div class="Box-header">Atención presencial y telefónica</div>
            <div class="Box-body">
              <h3 class="Box-title">Junta Nacional de Drogas</h3>
              <div class="Box-image">
                <img src="img/mapa.jpg" alt="Mapa Organismo">
              </div>
              <span class="Box-subtitle"><span class="Icon Icon--phone Icon--small u-mr1"></span><strong>(+595 2) 1503935</strong></span>
              <dl class="Box-definitions">
                <dt>Dirección:</dt>
                <dd>Plaza Independencia 710</dd>
                <dt>Horario de atención:</dt>
                <dd>Lunes a viernes de 12:30 a 18:00 hs.</dd>
                <dt>Correo electrónico:</dt>
                <dd><a href="mailto:contacto@agesic.gub.uy">contacto@agesic.gub.uy</a></dd>
              </dl>
            </div>
            <div class="Box-footer">
              <a href="#">Ver todas las dependencias</a>
            </div>
          </div>
        </div>
        -->
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
