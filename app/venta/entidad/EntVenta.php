<?php
class EntVenta{
    public $Id;
    public $IdUsuario;
    public $IdArticulo;
    public $Cuenta;
    public $IdBanco;
    public $IdTipo;
    public $Cantidad;
    public $Total;
    public $Fecha;
    
    function __construct($Id=0, $IdUsuario=0, $IdArticulo=0, $Cuenta=0, $IdBanco=0, $IdTipo=0, $Cantidad=0, $Total=0, $Fecha='NOW()') {
        $this->Id = $Id;
        $this->IdUsuario = $IdUsuario;
        $this->IdArticulo = $IdArticulo;
        $this->Cuenta = $Cuenta;
        $this->IdBanco = $IdBanco;
        $this->IdTipo = $IdTipo;
        $this->Cantidad = $Cantidad;
        $this->Total = $Total;
        $this->Fecha = $Fecha;
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