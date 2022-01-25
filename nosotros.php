<?php
  require 'includes/funciones.php';  
  incluirTemplates('header');

  ?>
    <main class="contenedor seccion">
      <h1>Conoce sobre nosotros</h1>
      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <img
              loading="lazy"
              src="build/img/nosotros.jpg"
              alt="sobre nosotros"
            />
          </picture>
        </div>
        <div class="texto-nosotros">
          <blockquote>
            25 años de experiencia en el mercado inmobiliario.
          </blockquote>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium, aliquam numquam. Alias dolore debitis animi doloremque
            nisi facilis magni eligendi doloribus officia blanditiis est,
            perspiciatis itaque quae dolor expedita harum eos vel aut quaerat
            vero. Soluta temporibus ea saepe. Debitis.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium, aliquam numquam. Alias dolore debitis animi doloremque
            nisi facilis magni eligendi doloribus officia blanditiis est,
            perspiciatis itaque quae dolor expedita harum eos vel aut quaerat
            vero. Soluta temporibus ea saepe. Debitis.
          </p>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium, aliquam numquam. Alias dolore debitis animi doloremque
            nisi facilis magni eligendi doloribus officia blanditiis est,
            perspiciatis itaque quae dolor expedita harum eos vel aut quaerat
            vero. Soluta temporibus ea saepe. Debitis.           .
          </p>
        </div>
      </div>
    </main>
    <section class="contenedor seccion">
      <h2>Mas sobre Nosotros</h2>
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
    </section>
    <?php 
 incluirTemplates('footer');
  ?>
