<?php
class DaoCategoria implements IntCategoria{
    public $where = null;
    public function crear(\EntCategoria $cat) {
        try {
            $con = new Conexion();
            $con->ejecutar("insert into categoria (CatDescripcion) values('$cat->Descripcion')");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function editar(\EntCategoria $cat) {
        try {
            $con = new Conexion();
            $con->ejecutar("update categoria set CatDescripcion= '$cat->Descripcion'  where CatCodigo= $cat->id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from categoria  where CatCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    public function buscar($id) {
        $marca = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select CatCodigo cod ,CatDescripcion des from categoria where CatCodigo= '".$id."' ");
            while ($row = $sql->fetch_array()) {
                $marca=  new EntCategoria($row['cod'], $row['des']);
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
            $sql=$con->consultar("select CatCodigo cod ,CatDescripcion des from categoria where CatDescripcion LIKE '%" . $this->where . "%'");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntCategoria($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
}
?>