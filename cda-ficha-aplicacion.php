<?php
  $title = 'Aplicación';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="cda-listado-aplicaciones.php">Aplicaciones</a></li>
        <li><a href="cda-ficha-aplicacion.php">Nombre de la aplicación</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      
          <div class="Grid">

              <div class="Grid-item u-md-size8of10 Grid-item--center">
                <div class="Page">
                  <div class="Page-body">
                    <div class="Page-document">
    
                    <span class="Page-subtitle">2 Conjuntos de datos</span>
                    <h2 class="Page-title">Nombre de la aplicación</h2>
    
                    <div class="Page-info">
                      <div class="Bar">
                        <div class="Bar-cell">
                          <div class="Page-date">22 de noviembre, 2018</div>                          
                        </div>
                        <div class="Bar-cell">
                          <ul class="Page-actions">
                            <li>
                              <a href="#" class="Button Button--primary">Lanzar sitio web</a>
                            </li>
                            <li>
															<?php include "inc/dropdown-compartir.php"; ?>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    
                    <p class="Page-description">Resumen: descripción mínima que describe de qué se trata la aplicación, máximo 1000 caracteres. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque.</p>
                    
                    <div class="Page-image">
                      <img src="img/uruguay.jpg" alt="Uruguay">
                    </div>
                    
                    <h3>Conjuntos de datos relacionados</h3>
                    <ul>
                      <li><a href="#">Nombre y enlace del conjunto de datos relacionado a la aplicación</a></li>
                      <li><a href="#">Nombre y enlace del conjunto de datos relacionado a la aplicación</a></li>
                    </ul>
                    
                    <h3>Contenido</h3>
                    
                    <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>
                    
                    <p>Integer semper interdum lorem, at accumsan dolor blandit eget. Quisque commodo, erat vel hendrerit tincidunt, neque lacus venenatis nisi, auctor mattis massa odio sed nisl. Aliquam augue ipsum, convallis eu lorem non, porta dapibus elit. In gravida, diam vitae scelerisque sollicitudin, lorem dolor ultricies nibh, eget molestie tortor lectus molestie nibh. Integer pharetra leo id ex varius, sit amet feugiat elit lacinia. Vivamus vel orci sapien. Duis vel libero id quam ultrices tristique.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque impedit ab nulla omnis libero neque delectus veritatis laborum consequatur repudiandae! Voluptatem?</p>
                    
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                      <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                    </ul>

                    <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p> 
                    
                    <button class="Button Button--primary u-mt2">Lanzar sitio web</button>
                    
                    <h3>Temas relacionados</h3>
    
                    <div class="Tags">
                      <a href="#" class="Tags-item">Etiqueta</a>
                      <a href="#" class="Tags-item">Uruguay</a>
                      <a href="#" class="Tags-item">Palabra clave</a>
                    </div>

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
