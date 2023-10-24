<?php
  $title = 'Administrar usuario';
  $form = true;
  $logged = true;
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>
  
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="cda-home-usuario.php">Inicio</a></li>
        <li><a href="cda-administrar-usuario.php">Administrar usuario</a></li>
      </ul>
    </div>
  </div>
  
  <!-- Contenido -->
  <main class="u-main" id="contenido">
    
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
            <div class="Page-nav">
              <a class="Page-navTitle js-toggleLocalNav" href="cda-home-usuario.php">
                  <span class="Caret u-md-hide"></span>Juan Pérez
              </a>

              <ul class="Page-navList">
                <li><a href="#">Estadísticas</a></li>
                <li><a href="#">Feed de Noticias / Actividad</a></li>
                <li><a href="#">Mis Conjuntos de Datos</a></li>
                <li><a href="#">Mis Organismos / Publicadores</a></li>
                <!--
                <li>
                    <a href="carpeta.html">Items</a>

                    <ul class="Page-navSublist">
                        <li><a href="documento.html">Item uno</a></li>
                        <li><a href="documento.html">Item dos</a></li>
                    </ul>
                </li>
                -->
                <li><a href="#">Mis Categorías</a></li>
                <li><a href="#">Mis Aplicaciones</a></li>
                <li class="is-active"><a href="cda-administrar-usuario.php">Administrar usuario</a></li>
              </ul>
            </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">
                <h2 class="Page-title">Administrar usuario</h2>

                <p class="Page-description">Your profile lets other CKAN users know about who you are and what you do. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut interdum elit nec ex rhoncus mollis.</p>
    
                <form>
                 <p class="form-required u-mb0">Los campos indicados con <span>*</span> son obligatorios</p>
                  <fieldset>
                      <legend class="u-h5">Información general</legend>
                        <ul class="form-group-list">
                          <li>
                              <label for="primer-nombre">Nombre de usuario:<span class="required">*</span></label>
                              <input class="soloLectura" id="primer-nombre" name="soloLectura" type="text" readonly value="NombreUsuario">
                          </li>
                          <li>
                              <label for="segundo-nombre">Nombre completo:</label>
                              <input id="segundo-nombre" name="" type="text" value="Juan Pérez">
                          </li>
                          <li>
                              <label for="mail">Correo electrónico:<span class="required">*</span></label>
                              <input id="mail" name="" type="text" value="juanperez@agesic.gub.uy">
                          </li>
                          <!--
                          <li>
                              <label for="primer-apellido">Primer apellido:<span class="required">*</span></label>
                              <input id="primer-apellido" name="" type="text">
                          </li>
                          <li>
                              <label for="segundo-apeliido">Segundo apellido:</label>
                              <input id="segundo-apeliido" name="" type="text">
                          </li>
                          -->
                          <li>
                            <label class="textarea" for="consulta">Acerca de:</label>
                            <ul class="group-list">
                              <li>
                                <textarea id="consulta" name="consulta" placeholder="Un poco de información acerca de usted"></textarea>
                              </li>
                            </ul>
                            <span class="input-msg">Puedes usar <a href="#">formato Markdown</a> aquí</span>
                          </li>

                          <!--
                          <li>
                              <label for="contraseña">Contraseña:<span class="required">*</span></label>
                              <input id="contraseña" type="password" value="123456">
                              <p class="input-msg u-mb0">Nivel de seguridad:<strong class="u-textRed u-mr2"> Muy bajo</strong> <a href="">¿Cómo puedo mejorarla?</a></p>
                          </li>
                          
                          <li>
                              <label for="repetir-contraseña">Repetir contraseña:<span class="required">*</span></label>
                              <input id="repetir-contraseña" type="password">
                          </li>
                          
                          

                          <li>
                              <span class="label label-align-top">Condiciones y privacidad:<span class="required">*</span></span>
                              <ul class="group-list">
                                  <li>
                                      <label for="condiciones">
                                          <input type="checkbox" id="condiciones" name="condiciones" value="opcionCheckUno" title="Acepto los términos y condiciones">
                                          <span>Acepto los <a href="terminos-de-uso.php">Términos y condiciones</a> y la <a href="politica-privacidad.php">Política de privacidad</a> de uso de mi usuario.</span>
                                      </label>
                                  </li>
                                  <li>
                                      <label for="compartir-mail">
                                          <input type="checkbox" id="compartir-mail" name="compartir mail" value="opcionCheckDos" title="Compartir mi correo electrónico">
                                          <span>Acepto compartir mi correo electrónico con las aplicaciones que me vincule a través de mi usuario.</span>
                                      </label>
                                  </li>
                              </ul>
                          </li>

                          <li>
                              <img class="input-msg" src="img/captcha.png" alt="Captcha" width="65%">
                          </li>
                          -->

                      </ul>
                  </fieldset>
                  
                  <fieldset>
                    <legend class="u-h5">Seguridad</legend>
                    <ul class="form-group-list">
                      <li>
                        <label for="contrasena">Contraseña:</label>
                        <input class="soloLectura u-textGold" id="contrasena" name="contrasena" type="text" readonly value="Seguridad media">
                        <a href="#" class="input-msg u-mb2">¿Cómo puedo mejorarla?</a>
                        <a href="#" class="Button Button--inverse Button--small align-to-input">Modificar contraseña</a>
                      </li>
                    </ul>
                  </fieldset>
                  
                  <fieldset>
                    <legend class="u-h5">Clave API</legend>
                    <ul class="form-group-list">
                      <li>
                        <label for="claveAPI">Clave API vigente:</label>
                        <input class="soloLectura" id="claveAPI" name="claveAPI" type="text" readonly value="f6d6bb9c-df65-457a-9eca-4a5b100e244a">
                        <a href="#" class="input-msg u-mb2">¿Para que sirve la clave API?</a>
                        <a href="#" class="Button Button--inverse Button--small align-to-input">Regenerar clave API</a>
                      </li>
                    </ul>
                  </fieldset>
                  
                  
                  <ul class="form-action-buttons">
                    <li class="action-buttons-primary">
                      <ul class="u-mb0">
                        <li>
                          <button class="Button Button--primary u-right">Actualizar usuario</button>
                        </li>
                      </ul>
                    </li>
                  </ul>
              </form>

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
