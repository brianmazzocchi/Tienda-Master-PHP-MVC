<?php
require_once 'models/producto.php';
class productoController {
    
    //Index controlador
    public function index() {
        //renderizar vista
    require_once 'views/producto/destacados.php';
    }

    // Listar productos 
    public function gestion(){
        Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/producto/gestion.php';
    }

    // Crear Productos
    public function crear(){
        Utils::isAdmin();
        require_once 'views/producto/crear.php';
    }

    // Guardar
    public function save(){
        Utils::isAdmin();
        if(isset($_POST)){
           $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
           $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
           $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
           $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
           $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
         //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

        if($nombre && $descripcion && $precio && $stock && $categoria) {
            $producto = new Producto();
            $producto->setNombre($nombre);
            $producto->setDescripcion($descripcion);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setCategoria_id($categoria);

            //Guardar la imagen
            $file = $_FILES['imagen'];
            $filename = $file['name'];
            $mimetype = $file['type'];           

            // Chequeo el tipo de archivo que estoy aceptando
            if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif"){
                
                // echo '<pre>';
                //     print_r($file);
                // echo '</pre>';
                // die();

                // chequeo que este creado un directorio para las imagenes
                if(!is_dir('uploads/images')) {
                    mkdir('uploads/images', 0777, true);
                }

                move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);            
                $producto->setImagen($filename);       
            
            }else {
                $_SESSION['producto'] = 'failed';
            }
            
            $save = $producto->save();
            if($save){
                $_SESSION['producto'] = 'complete';
            } else {
                $_SESSION['producto'] = 'failed';
            }
        } else { //Si alguno de los campos es false
            $_SESSION['producto'] = 'failed';
        }
      } else { //si no me llega nada por POST
        $_SESSION['producto'] = 'failed';
      }
      header('Location:'.base_url.'producto/gestion');
    }    
}