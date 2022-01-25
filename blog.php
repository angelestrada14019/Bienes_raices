<?php
  require 'includes/funciones.php';  
  incluirTemplates('header');

  ?>
    <main class="contenedor seccion contenido-centrado">
      <h1>Nuestro Blog</h1>
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp" />
            <img loading="lazy" src="build/img/blog1.jpg" alt="blog 1" />
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="informacion-meta">Escrito el: <span>20/10/2022</span> Por: <span>Admin</span></p>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos,
              quaerat? Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Quos, quaerat?
            </p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog2.webp" type="image/webp" />
            <img loading="lazy" src="build/img/blog2.jpg" alt="blog 2" />
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="informacion-meta">Escrito el: <span>20/10/2022</span> Por: <span>Admin</span></p>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos,
              quaerat? Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Quos, quaerat?
            </p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog3.webp" type="image/webp" />
            <img loading="lazy" src="build/img/blog3.jpg" alt="blog 3" />
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="informacion-meta">Escrito el: <span>20/10/2022</span> Por: <span>Admin</span></p>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos,
              quaerat? Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Quos, quaerat?
            </p>
          </a>
        </div>
      </article>
      <article class="entrada-blog">
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog4.webp" type="image/webp" />
            <img loading="lazy" src="build/img/blog4.jpg" alt="blog 4" />
          </picture>
        </div>
        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Guía para la decoración de tu hogar</h4>
            <p class="informacion-meta">Escrito el: <span>20/10/2022</span> Por: <span>Admin</span></p>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos,
              quaerat? Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Quos, quaerat?
            </p>
          </a>
        </div>
      </article>
    </main>

    <?php 
 incluirTemplates('footer');
  ?>