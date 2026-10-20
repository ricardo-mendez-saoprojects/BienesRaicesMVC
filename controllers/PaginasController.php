<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router) {
        $propiedades = Propiedad::get(3);
        $inicio = true;
        $router->render('paginas/index', [
            'propiedades' =>$propiedades,
            'inicio' => $inicio
      ]);
    }

    public static function nosotros(Router $router) {
        $router->render('paginas/nosotros');
    }

    public static function propiedades(Router $router) {
        $propiedades = Propiedad::all();
        
        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }

    public static function propiedad(Router $router) {
        $id = validarORedireccionar('/propiedades');
        // Buscar la propiedad por su ID
        $propiedad = Propiedad::find($id);
       $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
       ]);
    }

    public static function blog(Router $router) {
       $router->render('paginas/blog');
    }

    public static function entrada(Router $router) {
       $router->render('paginas/entrada');
    }

    public static function contacto(Router $router) {

        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuestas = $_POST['contacto'];
           
            // Crear una instancia PHPMailer
            $mail = new PHPMailer();

            // Configurar SMTP

            $mail-> isSMTP();
            $mail->Host = $_ENV['EMAIL_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['EMAIL_USER'];
            $mail->Password = $_ENV['EMAIL_PASS'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = (int) $_ENV['EMAIL_PORT'];

            // Configurar el contenido del mail

            $mail->setFrom('admin@denemaxcfc.com');
            $mail->addAddress('admin@denemaxcfc.com', 'DeneMaxcFC.com');
            $mail->Subject = 'Tienes un nuevo Mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>'; 
            $contenido .= '<p>Tienes un nuevo mensaje </p>'; 
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] .   '</p>'; 

            // Envir de forma condicional algunos campos de email o telefono.
                if($respuestas['contacto'] === 'telefono') {
                    // Agregamos el campo de telefono.
                    $contenido .= '<p>Eligio ser contactado por telefono:</p>';
                    
                    $contenido .= '<p>Telefono:' . $respuestas['telefono'] . '</p>'; 

                    $contenido .= '<p>Fecha contacto: ' . $respuestas['fecha'] .  '</p>'; 
                    $contenido .= '<p>Hora: ' . $respuestas['hora'] .  '</p>'; 
                } else {
                    //Es email, entonces agregamos el campo de email.
                    $contenido .= '<p>Eligio ser contactado por email:</p>';
                    
                    $contenido .= '<p>Email: ' . $respuestas['email']  . '</p>';
                }

            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] .  '</p>'; 
            // $contenido .= '<p>Vende o Compra: ' . $respuestas['tipo'] .  '</p>'; 
            // $contenido .= '<p>Precio o Presupuesto: $ ' . $respuestas['precio'] .  '</p>'; 
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';
            // Enviar el mail
            if($mail->send()) {
                $mensaje = "Mensaje enviado correctamente";
            } else {
                $mensaje = "El mensaje no se pudo enviar...";
            }

    
        }

        $router->render('paginas/contacto', [
            'mensaje'=> $mensaje
        ]);
    }

}