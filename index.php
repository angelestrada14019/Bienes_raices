<?php
  $inicio=true;
 include 'includes/templates/header.php'
  ?>
<!-- <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css" />
  </head>
  <body>
    <header class="header inicio">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/"><img src="build/img/logo.svg" alt="Logo pagina" /></a>
          <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="icono menu">
          </div>
          <div class="derecha">
            <img src="build/img/dark-mode.svg" alt="dark mode" class="dark-mode-boton">
            <nav class="navegacion">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            </nav>
          </div>
          
        </div>
        <h2>Venta de Casas y Departamentos Exclusivos de Lujo</h2>
      </div>
    </header> -->
    <main class="contenedor seccion">
      <h1>Mas sobre Nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique,
            excepturi? Quo suscipit perspiciatis optio nisi, explicabo sit
            dolore fugiat praesentium nobis, eveniet vero deleniti quas officia
            ut, asperiores distinctio provident.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique,
            excepturi? Quo suscipit perspiciatis optio nisi, explicabo sit
            dolore fugiat praesentium nobis, eveniet vero deleniti quas officia
            ut, asperiores distinctio provident.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy" />
          <h3>Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique,
            excepturi? Quo suscipit perspiciatis optio nisi, explicabo sit
            dolore fugiat praesentium nobis, eveniet vero deleniti quas officia
            ut, asperiores distinctio provident.
          </p>
        </div>
      </div>
    </main>
    <section class="seccion contenedor">
      <h2>Casas y Departamentos en venta</h2>
      <div class="contenedor-anuncios">
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp" />
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio 1" />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de lujo en el lago</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium, ex!
            </p>
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
            <a class="boton-amarillo-block" href="anuncio.php">
              Ver propiedad
            </a>
          </div>
        </div>
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp" />
            <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio 2" />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa terminada de lujo</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium, ex!
            </p>
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
            <a class="boton-amarillo-block" href="anuncio.php">
              Ver propiedad
            </a>
          </div>
        </div>
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp" />
            <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio 3" />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa con alberca</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Praesentium, ex!
            </p>
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
            <a class="boton-amarillo-block" href="anuncio.php">
              Ver propiedad
            </a>
          </div>
        </div>
      </div>
      <div class="alinear-derecha">
        <a class="boton-verde" href="anuncios.php">Ver todas</a>
      </div>
    </section>
    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sueños</h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, in.
      </p>
      <a class="boton-amarillo" href="contacto.php">Contactános</a>
    </section>
    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>
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
      </section>
      <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Reprehenderit voluptatibus quas omnis perspiciatis quidem dolore            
          </blockquote>
          <p>- Testimonial 1</p>
        </div>
      </section>
    </div>

    <?php 
 include 'includes/templates/footer.php'
  ?>
