<?php
class DaoTipo implements IntTipo{
    public $where = null;
    public function crear(\EntTipo $tipo) {
        try {
            $con = new Conexion();
            $con->ejecutar("insert into tipocuenta (TipDescripcion) values('$tipo->Descripcion')");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function editar(\EntTipo $tipo) {
        try {
            $con = new Conexion();
            $con->ejecutar("update tipocuenta set TipDescripcion= '$tipo->Descripcion'  where TipCodigo= $tipo->id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from tipocuenta  where TipCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    public function buscar($id) {
        $marca = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select TipCodigo cod ,TipDescripcion des from tipocuenta where TipCodigo= '".$id."' ");
            while ($row = $sql->fetch_array()) {
                $marca=  new EntTipo($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $marca;
    }
    public function listar() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql=$con->consultar("select TipCodigo cod ,TipDescripcion des from tipocuenta where TipDescripcion LIKE '%" . $this->where . "%'");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntTipo($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
}
?>