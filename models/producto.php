<?php

class Producto {
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    //Crear la conexion a la db
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }


	function getId() { 
 		return $this->id; 
	} 

	function setId($id) {  
		$this->id = $id; 
	} 

	function getCategoria_id() { 
 		return $this->categoria_id; 
	} 

	function setCategoria_id($categoria_id) {  
		$this->categoria_id = $categoria_id; 
	} 

	function getNombre() { 
 		return $this->nombre; 
	} 

	function setNombre($nombre) {  
		$this->nombre = $this->db->real_escape_string($nombre);
	} 

	function getDescripcion() { 
 		return $this->descripcion; 
	} 

	function setDescripcion($descripcion) {  
		$this->descripcion = $this->db->real_escape_string($descripcion); 
	} 

	function getPrecio() { 
 		return $this->precio; 
	} 

	function setPrecio($precio) {  
		$this->precio = $this->db->real_escape_string($precio); 
	} 

	function getStock() { 
 		return $this->stock; 
	} 

	function setStock($stock) {  
		$this->stock = $this->db->real_escape_string($stock); 
	} 

	function getOferta() { 
 		return $this->oferta; 
	} 

	function setOferta($oferta) {  
		$this->oferta = $this->db->real_escape_string($oferta); 
	} 

	function getFecha() { 
 		return $this->fecha; 
	} 

	function setFecha($fecha) {  
		$this->fecha = $fecha; 
	} 

	function getImagen() { 
 		return $this->imagen; 
	} 

	function setImagen($imagen) {  
		$this->imagen = $imagen; 
	} 

    public function getAll() {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
        return $productos;
    }

     // metodo para guardar
    public function save() {
        $sql = "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }   

}