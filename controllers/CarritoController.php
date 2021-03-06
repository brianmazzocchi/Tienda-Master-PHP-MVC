<?php
require_once 'models/producto.php';

class carritoController {    

    public function index() {
        
        $carrito = $_SESSION['carrito'];
        require_once 'views/carrito/index.php';
    }


    public function add(){
        //Recibo el parametro por get y lo asigno a variable
        if(isset($_GET['id'])) {
            $producto_id = $_GET['id'];
        } else {
            header('Location:'.base_url);
        }
        
        //Chequeo si existe la sesion
        if(isset($_SESSION['carrito'])){
            $counter = 0;         
          
            // recorro carrito
            foreach($_SESSION['carrito'] as $indice => $elemento) {
                
                // chequeo si existe el producto en el carrito
                if($elemento['id_producto'] == $producto_id) {
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }

        }
        //Si el contador no existe o es cero.  
        if(!isset($counter) || ($counter == 0 )) {
            //Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            //Añadir al carrito
            if(is_object($producto)){
                $_SESSION['carrito'][] = array(
                    "id_producto"=> $producto->id,
                    "precio"=>$producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }                 
        }
         //Redireccion al carrito
         header('Location:'.base_url.'carrito/index');
    }

    public function remove(){
        
    }

    public function delete_all(){
        unset($_SESSION['carrito']);
        header("Location:".base_url."carrito/index");
    }






    

}