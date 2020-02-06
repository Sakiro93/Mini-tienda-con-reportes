<?php

class EntCliente {

    public $Id;
    public $cliNombre;
    public $cliApellido;
    public $cliTelefono;
    public $cliCorreo;
    public $cliClave;
   
    function __construct($cliId = 0, $cliNombre = "",$cliApellido="",
            $cliTelefono = "", $cliCorreo = "",$cliClave ="") {
        $this->Id = $cliId;
        $this->cliNombre = $cliNombre;
        $this->cliApellido = $cliApellido;
        $this->cliTelefono = $cliTelefono;
        $this->cliCorreo = $cliCorreo;
        $this->cliClave = $cliClave;
       
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
