<?php
  require 'includes/funciones.php';  
  incluirTemplates('header');

  ?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>
      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <img        
          loading="lazy"
          src="build/img/destacada.jpg"
          alt="imagen destacada"
        />
      </picture>
      <div class="resumen-propiedad">
        <p class="precio">$ 3.000.000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img
              class="icono"
              loading="lazy"
              src="build/img/icono_wc.svg"
              alt="icono WC"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="icono"              
              loading="lazy"
              src="build/img/icono_estacionamiento.svg"
              alt="icono estacionamiento"
            />
            <p>3</p>
          </li>
          <li>
            <img
              class="icono"
              loading="lazy"
              src="build/img/icono_dormitorio.svg"
              alt="icono Dormitorios"
            />
            <p>4</p>
          </li>
        </ul>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis
          illo provident consequuntur dolores minima eius itaque rem quibusdam,
          obcaecati ipsam tenetur, ad atque velit optio sunt maiores, maxime
          consequatur quia incidunt expedita? Ducimus cum saepe dolorum ut
          pariatur beatae atque a inventore! Quia totam ipsa quisquam,
          blanditiis enim voluptatem consequatur? Lorem ipsum dolor, sit amet
          consectetur adipisicing elit. Reiciendis illo provident consequuntur
          dolores minima eius itaque rem quibusdam, obcaecati ipsam tenetur, ad
          atque velit optio sunt maiores, maxime consequatur quia incidunt
          expedita? Ducimus cum saepe dolorum ut pariatur beatae atque a
          inventore! Quia totam ipsa quisquam, blanditiis enim voluptatem
          consequatur?
        </p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis
          illo provident consequuntur dolores minima eius itaque rem quibusdam,
          obcaecati ipsam tenetur, ad atque velit optio sunt maiores, maxime
          consequatur quia incidunt expedita? Ducimus cum saepe dolorum ut
          pariatur beatae atque a inventore! Quia totam ipsa quisquam,
          blanditiis enim voluptatem consequatur?
        </p>
      </div>
    </main>

    <?php 
 incluirTemplates('footer');
  ?>
