<?php
class EntArticulo{
    
    public $Id;
    public $Foto;
    public $Nombre;
    public $Descripcion;
    public $IdCategoria;
    public $IdMarca;
    public $IdProveedor;
    public $Precio;
    public $Stock;
    public $Estado;
   
    function __construct($Id=0, $Foto="", $Nombre="", $Descripcion="", $IdCategoria=0, $IdMarca=0, $IdProveedor=0, $Precio=0, $Stock=0, $Estado=0) {
        $this->Id = $Id;
        $this->Foto = $Foto;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
        $this->IdCategoria = $IdCategoria;
        $this->IdMarca = $IdMarca;
        $this->IdProveedor = $IdProveedor;
        $this->Precio = $Precio;
        $this->Stock = $Stock;
        $this->Estado = $Estado;
    }

        public function __get($k) {
        return $this->$k;
    }

    public function __set($k, $v) {
        return $this->$k = $v;
    }

    public function __toString() {
        return json_encode($this);
    }
}
?>