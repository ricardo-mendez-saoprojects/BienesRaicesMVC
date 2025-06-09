<main class="contenedor seccion">
    <h1>Conoce Nuestro Club de Fútbol</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/deporte1.webp" type="image/webp">
                <source srcset="build/img/deporte1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/deporte1.jpg" alt="Sobre Nuestro Club de Fútbol">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                10 Años formando campeones
            </blockquote>
            <p>Desde nuestra fundación, hemos trabajado para convertirnos en un referente en el mundo del fútbol juvenil y profesional. Nuestro club ofrece programas de desarrollo integral para jóvenes talentos.</p>
            
            <p>Nos centramos no solo en la excelencia en el campo de juego, sino también en la formación educativa y personal de nuestros atletas. Contamos con un equipo de entrenadores altamente calificado y con años de experiencia en el deporte rey.</p>
        </div>
    </div>
    <div class="contenido-nosotros">
        

        <div class="texto-nosotros">
            <blockquote>
                10 Años formando campeones
            </blockquote>
            <p>Desde nuestra fundación, hemos trabajado para convertirnos en un referente en el mundo del fútbol juvenil y profesional. Nuestro club ofrece programas de desarrollo integral para jóvenes talentos.</p>
            
            <p>Nos centramos no solo en la excelencia en el campo de juego, sino también en la formación educativa y personal de nuestros atletas. Contamos con un equipo de entrenadores altamente calificado y con años de experiencia en el deporte rey.</p>
        </div>
        <div class="imagen">
            <picture>
                <source srcset="build/img/deporte2.webp" type="image/webp">
                <source srcset="build/img/deporte2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/deporte2.jpg" alt="Sobre Nuestro Club de Fútbol">
            </picture>
        </div>
    </div>
    <div class="contenido-nosotros">
    <div class="imagen">
            <picture>
                <source srcset="build/img/deporte3.webp" type="image/webp">
                <source srcset="build/img/deporte3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/deporte3.jpg" alt="Sobre Nuestro Club de Fútbol">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                10 Años formando campeones
            </blockquote>
            <p>Desde nuestra fundación, hemos trabajado para convertirnos en un referente en el mundo del fútbol juvenil y profesional. Nuestro club ofrece programas de desarrollo integral para jóvenes talentos.</p>
            
            <p>Nos centramos no solo en la excelencia en el campo de juego, sino también en la formación educativa y personal de nuestros atletas. Contamos con un equipo de entrenadores altamente calificado y con años de experiencia en el deporte rey.</p>
        </div>
        
    </div>
    <form action="tu-archivo-php.php" method="post" class="formulario">
        <fieldset>
                <legend>Informacion Jugador</legend>
                    <!-- Nombre -->
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
                    
                    <!-- Apellidos -->
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" required>
                    
                    <!-- Fecha de Nacimiento -->
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    
                    <!-- Género -->
                    <label for="genero">Género:</label>
                    <select id="genero" name="genero">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                    
                    <!-- Correo Electrónico -->
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico" required>
                    
                    <!-- Contraseña -->
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required>
                    
                    <!-- Nacionalidad -->
                    <label for="nacionalidad">Nacionalidad:</label>
                    <select id="nacionalidad" name="nacionalidad">
                        <option value="argentina">Argentina</option>
                        <option value="colombiana">Colombiana</option>
                        <!-- Más opciones aquí -->
                    </select>
                    
                    <!-- Profesión -->
                    <label for="profesion">Profesión:</label>
                    <input type="text" id="profesion" name="profesion" placeholder="Ingrese su profesión">
                    
                    <!-- Teléfono -->
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono">
                    
                    <!-- Botón de envío -->
                    <input type="submit" value="Enviar">
            </fieldset>
    </form>

    <form class="row" action="gauto.php" method="post">

<div>
    <p>En cumplimiento de lo previsto en el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo,
        de 27
        de abril
        de 2016, y dado que el derecho a la propia imagen está reconocido en el artículo 18 de la
        Constitución y
        regulado por la
        Ley 1/1982, de 5 de mayo, sobre el derecho al honor, a la intimidad personal y familiar y a la
        propia
        imagen le
        informamos que las imágenes captadas </p>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" colspan="2">TRATAMIENTOS DE DATOS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="2">ENVÍO DE COMUNICACIONES</th>
        </tr>
        <tr>
            <td>
                <p><b>Finalidad del Tratamiento:</b> solo se tratarán los datos recogidos con objeto de
                    enviar e
                    informar sobre avisos, eventos, o información relacionada con las actividades del club a
                    los
                    miembros y jugadores/as vinculados al mismo.</p>
            </td>
            <td>
                <select class="form-select" id="envioComu" name="envioComu" required>
                    <option value="si">Autorizo</option>
                    <option value="no">No autorizo</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="2">USO DE IMÁGENES EN REDES SOCIALES</th>
        </tr>
        <tr>
            <td>Finalidad del Tratamiento: las imágenes de los jugadores/as o jugadores/as menores
                únicamente se tratarán con la finalidad de ser incluidas en cualquiera de las diversas
                fotografías y vídeos que se tomen en las distintas actividades, partidos, fiestas, y eventos
                propios del club, durante el tiempo que esté inscrita el jugador/a, pudiendo ser expuestas
                en
                las redes sociales del club. Siempre respetando que no se dañe la intimidad, la dignidad y
                el
                honor del jugador/a o jugador/a menor.</td>
            <td>
                <select class="form-select" id="imgRDS" name="imgRDS" required>
                    <option value="si">Autorizo</option>
                    <option value="no">No autorizo</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="2">USO DE IMÁGENES EN LA PÁGINA WEB DEL CLUB</th>
        </tr>
        <tr>
            <td>
                <p>Finalidad del Tratamiento: las imágenes de los jugadores/as o jugadores/as menores
                    únicamente se tratarán con la finalidad de ser incluidas en cualquiera de las diversas
                    fotografías y vídeos que se tomen en las distintas actividades, partidos, fiestas, y
                    eventos
                    propios del club, durante el tiempo que esté inscrito el jugador, pudiendo ser expuestas
                    en la
                    página web del club. Siempre respetando que no se dañe la intimidad, la dignidad y el
                    honor
                    del menor.</p>
            </td>
            <td>
                <select class="form-select" id="imgPWeb" name="imgPWeb" required>
                    <option value="si">Autorizo</option>
                    <option value="no">No autorizo</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="2">USO DE IMÁGENES EN PLATAFORMA DE STREAMING</th>
        </tr>
        <tr>
            <td>Finalidad del Tratamiento: las imágenes de los jugadores/as y jugadores/as menores
                únicamente se tratarán con la finalidad de ser incluidas en las grabaciones y retrasmisiones
                de los partidos captados por la red de videocámaras del campo. Estas serán subidas
                posteriormente a la plataforma de streaming contratada por el club, a la que únicamente
                tendrán acceso los miembros y jugadores/as del club y sus tutores legales.
            </td>
            <td>
                <select class="form-select" id="imgStr" name="imgStr" required>
                    <option value="si">Autorizo</option>
                    <option value="no">No autorizo</option>
                </select>
            </td>
        </tr>
        <tr>
            <th colspan="2">INCLUSIÓN EN GRUPO DE WHATS APP</th>
        </tr>
        <tr>
            <td>Finalidad del Tratamiento: los datos recabados únicamente se tratarán para facilitar las
                comunicaciones entre el cuerpo técnico, el club y los jugadores/as y padres o tutores por
                medio de la aplicación de WhatsApp, por ello requerimos su consentimiento para añadirle al
                grupo creado en dicha plataforma por la organización:</td>
            <td><select class="form-select" id="iWHATS" name="iWHATS" required>
                    <option value="si">Autorizo</option>
                    <option value="no">No autorizo</option>
                </select></td>
        </tr>
    </tbody>
</table>

    

</main>
<section class="contenedor seccion">
    <h1>Más Sobre Nuestro Club</h1>

    <?php include 'iconos.php'; ?>

</section>


