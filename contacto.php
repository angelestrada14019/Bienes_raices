  <?php include 'includes/templates/header.php' ?>
    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <img
          loading="lazy"
          src="build/img/destacada2.jpg"
          alt="imagen destacada 3"
        />
      </picture>
      <h2>Llene el formulario de contacto</h2>
      <form action="" class="formulario">
        <fieldset>
          <legend>Informacion personal</legend>
          <div>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre" />
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" placeholder="Tu email" id="email" />
          </div>
          <div>
            <label for="telefono">Telefono</label>
            <input type="tel" placeholder="Tu telefono" id="telefono" />
          </div>
          <div>
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>
          </div>
        </fieldset>
        <fieldset>
          <legend>Informacion sobre la propiedad</legend>
          <div>
            <label for="opciones">Vende o compra</label>
            <select id="opciones">
              <option disabled selected value="">--seleccione</option>
              <option value="compra">Compra</option>
              <option value="vende">Vende</option>
            </select>
          </div>
          <div>
            <label for="presupuesto">Precio o presupuesto</label>
            <input
              type="number"
              placeholder="Tu precio o presupuesto"
              id="presupuesto"
            />
          </div>
        </fieldset>
        <fieldset>
          <legend>Contacto</legend>
          <p>Como desea ser contactado</p>
          <div class="forma-contacto">
            <div>
              <label for="contactar-telefono">Télefono</label>
              <input
                type="radio"
                name="contacto"
                value="telefono"
                id="contactar-telefono"
              />
            </div>
            <div>
              <label for="contactar-email">Email</label>
              <input
                type="radio"
                name="contacto"
                value="email"
                id="contactar-email"
              />
            </div>
          </div>
          <p>
            Si eligió teléfono, elija la fecha y la hora para ser contactado
          </p>
          <div>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" />
          </div>
          <div>
            <label for="hora">Hora</label>
            <input type="time" id="hora" min="9:00" max="18:00" />
          </div>
        </fieldset>
        <input class="boton-verde" type="submit" value="Enviar" />
      </form>
    </main>

    <?php 
 include 'includes/templates/footer.php'
  ?>
