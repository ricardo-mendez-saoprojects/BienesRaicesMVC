<?php 

    if(!isset($_SESSION)){
        session_start();
    }
        
    $auth = $_SESSION['login'] ?? false;
        if(!isset($inicio)) {
            $inicio = false;
        }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Denemax FC</title>
        <link rel="stylesheet" href="../build/css/app.css">
    </head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <h1>Denemax FC</h1>
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Eventos</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/logout">Cerrar Sesión&#8656;</a>
                        <?php else: ?>
                            <a href="/login">&#8658;Login</a>
                        <?php endif; ?>
                    </nav>
                </div>
                
            </div><!--Cierre de .barra-->
            
            <?php if($inicio) { ?>
                <h1>Asesoramiento Deportivo Gestionamos tu Club</h1>
            <?php } ?>
            <!-- <div class="wave" style="height: 20rem; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                    style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg>
            </div> -->
        </div>
    </header>

    <?php echo $contenido; ?>
        
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
        <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Eventos</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        
                    </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados <?php echo date ('Y'); ?> &copy; </p>


    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>
</html>
    