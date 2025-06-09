<main class="contenedor seccion">
            <h1>Registro Admin</h1>
            <a href="/admin" class="boton-verde">Volver</a>

            <?php foreach ($errores as $error) : ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>

            <?php endforeach; ?>

            <form class="formulario" method="POST" " action="/vendedores/crear">
                <?php include 'formulario.php'; ?>
                <input type="submit" value="Registrar Admin" class="boton boton-verde">
            </form>
    </main>