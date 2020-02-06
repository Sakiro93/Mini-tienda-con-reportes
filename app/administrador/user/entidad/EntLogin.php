<?php

class EntLogin {

    public $logId;
    public $login;
    public $logclave;
    public $lognombre;
    public $user;
    public $rol;
    public $usuestado;

    public function __construct($logId = 0, $login = '', $logclave = '', $lognombre = '', $rol = '', $usuestado = true) {
        $this->logId = $logId;
        $this->login = $login;
        $this->logclave = $logclave;
        $this->lognombre = $lognombre;
        $this->rol = $rol;
        $this->usuestado = $usuestado;
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