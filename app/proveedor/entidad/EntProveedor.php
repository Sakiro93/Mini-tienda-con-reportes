<?php

class EntProveedor {

    public $Id;
    public $Nombre;
    public $Ruc;
    public $Direccion;
    public $Telefono;
    public $Correo;
    public $Estado;
   
    function __construct($Id = 0,$Nombre = "",$Ruc="", $Direccion = "",
            $Telefono = "",$Correo = "",$Estado=0) {
        $this->Id = $Id;
        $this->Nombre = $Nombre;
        $this->Ruc = $Ruc;
        $this->Direccion = $Direccion;
        $this->Telefono = $Telefono;
        $this->Correo = $Correo;
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
