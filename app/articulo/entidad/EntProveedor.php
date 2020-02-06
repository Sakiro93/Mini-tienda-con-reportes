<?php
class EntProveedor{
    public $id;
    public $Nombre;
    public function __construct($id = 0, $Nombre = '') {
        $this->id = $id;
        $this->Nombre = $Nombre;
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