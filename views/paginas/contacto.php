<main class="contenedor seccion">
        <h1>Contacto</h1>

        <?php if($mensaje) { ?>
            <p class="alerta exito"> <?php echo $mensaje; ?> </p>
            <?php } ?>

        <picture>
            <source srcset="build/img/deporte1.webp" type="image/webp">
            <source srcset="build/img/deporte1.jgp" type="image/jpeg">
            <img loading="lazy" src="build/img/deporte1.jpg" alt="Anuncio">
        </picture>

        <h2>Rellen el formulario de contacto</h2>

        <form class="formulario" action="/contacto" method="POST">
            <fieldset>
                <legend>Informacion Personal</legend>
                
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" required>
          
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="contacto[mensaje]" require></textarea>

            </fieldset>

            <!-- <fieldset>
                <legend>Informacion sobre la propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select id="opciones" name="contacto[tipo]" required>
                    <option value="" disabled selected>Selecciona</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" name="contacto[precio]" required>

            </fieldset> -->

            <fieldset>
                <legend>Contacto</legend>
                
                <p>Como desea ser contactado</p>
                
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>

                    <label for="contactar-email">E-mail</label>
                    <input type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
                </div>

                <div id="contacto"></div>
                
                

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>

    </main>