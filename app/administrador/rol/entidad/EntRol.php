<?php

class EntRol {

    public $idrol;
    public $descripcion;

    function __construct($idrol = 0, $descripcion = '') {
        $this->idrol = $idrol;
        $this->descripcion = $descripcion;
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
