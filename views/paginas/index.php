<main class="contenedor seccion">

        <h1>Mas Sobre Nosotros</h1>

        <?php include 'iconos.php'; ?>

    </main>

    <section class="seccion contenedor">
        <h2>Próximos Eventos</h2>

        <?php 
            include 'listado.php';
        ?>

        <div class="alinear-derecha">
            <a href="/propiedades" class="boton-verde">Ver Todos</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Supera tus limites</h2>
        <!-- <video autoplay muted loop>
            <source src="video/futbol.mp4" type="video/mp4">
            <source src="video/concierto.ogg" type="video/ogg">
            <source src="video/concierto.webm" type="video/webm">
        </video> -->
        <p>Rellena el formulario de contacto y un asesor se pondra en contacto</p>
        <a href="/contacto" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section>
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/deporte5.webp" type="img/webp">
                        <source srcset="build/img/deporte5.jpg" type="img/jpeg">
                        <img src="build/img/deporte5.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Real Madrid vs Manchester United</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    </a>
                    <p>Hoy tenemos partido, ambos equipos se juegan la primera plaza</p>
                    
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/torneo.webp" type="img/webp">
                        <source srcset="build/img/torneo.jpg" type="img/jpeg">
                        <img src="build/img/torneo.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>
                
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guia para lanzar faltas</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                    </a>
                    <p>Maximiza La fuerza de tu pegada con esta guia, aprende a combinar
                       el peso del cuerpo justo con la pegada
                    </p>
                    
                </div>
            </article>  

        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena atencion
                    y la casa que me ofrecieron cumple con todas mis expectativas
                </blockquote>
                <p>- Ricardo Mendez</p>
            </div>
        </section>
    </div>