<?php
class EntTipo{
    public $id;
    public $Descripcion;
    public function __construct($id = 0, $Descripcion = '') {
        $this->id = $id;
        $this->Descripcion = $Descripcion;
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