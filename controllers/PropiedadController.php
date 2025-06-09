<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

class PropiedadController{
    
    public static function index(Router $router) {
        
        $propiedades = Propiedad::all();
        $vendedores = Vendedor::all();
        
        // Muestra mensaje condicional 
        $resultado = $_GET['resultado'] ?? null;

       
        $router->render('propiedades/admin', [
            'propiedades' => $propiedades,
            'resultado' => $resultado,
            'vendedores' => $vendedores
        ]);
    }


    public static function crear(Router $router) {
        
        $propiedad = new Propiedad;
        $vendedores = Vendedor::all();
        
        // Arreglo con mensajes de errores
        $errores = Propiedad::getErrores();

       //Ejecutar el codigo despues de que el usuario envia el fomulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Crea una nueva instancia
        $propiedad = new Propiedad($_POST['propiedad']);
  
        // GENERAR UN NOMBRE UNICO
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
        
        // Setear la imagen
        // Realiza un rezise a la imagen con Intervention
        if($_FILES ['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }
        
        //Validar
        $errores = $propiedad -> validar();
  
    // Revisar el arreglo de errores este vacio
    if (empty($errores)) {
        
        // Crear la carpeta para subir imagenes
        if(!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
        }
        // Guarda la imagen en el servidor
        $image->save(CARPETA_IMAGENES . $nombreImagen);

        // Guarda en la base de datos
        $propiedad->guardar();
    }
}

        
        $router->render('propiedades/crear',[
            'propiedad'=>$propiedad,
            'vendedores'=>$vendedores,
            'errores'=>$errores
        ]);
    }
    
    public static function actualizar(Router $router) {
    
        $id = validarORedireccionar('/admin');   
       $propiedad = Propiedad::find($id);
       $vendedores = Vendedor::all();

       $errores = Propiedad::getErrores();

       // METODO POST PARA ACTUALIZAR
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Asignar los atributos
            $args = $_POST['propiedad'];
            
            $propiedad->sincronizar($args);
            
            // Validacion
            $errores = $propiedad->validar();

            // Subida de archivos
            // GENERAR UN NOMBRE UNICO
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";  
            
            if($_FILES['propiedad']['tmp_name']['imagen']) {
                $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
                $propiedad->setImagen($nombreImagen);
            }

            if (empty($errores)) { 
                if($_FILES['propiedad']['tmp_name']['imagen']) {
                    // Actualizar la imagen
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }
                $propiedad->guardar();     
            }
        }
       
       $router->render('/propiedades/actualizar', [
        'propiedad'=> $propiedad,
        'vendedores'=> $vendedores,
        'errores'=> $errores
       ]);
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            // Validar ID
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            
            if($id) {
                $tipo = $_POST['tipo'];
                // peticiones validas
                if(validarTipoContenido($tipo) ) {
                    $propiedad = Propiedad::find($id);
                    $propiedad->eliminar();
                }
            }
        }
    }
}