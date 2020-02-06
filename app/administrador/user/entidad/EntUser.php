<?php

class EntUser
{

    public $idusuario;
    public $nombre;
    public $username;
    public $pass;
    public $idrol;

    public function __construct($idusuario = 0, $nombre = '', $username = '', $pass = '', $idrol = '') {
        $this->idusuario = $idusuario;
        $this->nombre = $nombre;
        $this->username = $username;
        $this->pass = $pass;
        $this->idrol = $idrol;
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
