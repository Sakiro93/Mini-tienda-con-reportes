<?php
class DaoBanco implements IntBanco{
    public $where = null;
    public function crear(\EntBanco $banco) {
        try {
            $con = new Conexion();
            $con->ejecutar("insert into banco (BanDescripcion) values('$banco->Descripcion')");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function editar(\EntBanco $banco) {
        try {
            $con = new Conexion();
            $con->ejecutar("update banco set BanDescripcion= '$banco->Descripcion'  where BanCodigo= $banco->id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from banco  where BanCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    public function buscar($id) {
        $marca = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select BanCodigo cod ,BanDescripcion des from banco where BanCodigo= '".$id."' ");
            while ($row = $sql->fetch_array()) {
                $marca=  new EntBanco($row['cod'], $row['des']);
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
            $sql=$con->consultar("select BanCodigo cod ,BanDescripcion des from banco where BanDescripcion LIKE '%" . $this->where . "%'");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntBanco($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
}
?>