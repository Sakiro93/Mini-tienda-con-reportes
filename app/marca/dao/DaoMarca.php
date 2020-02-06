<?php
class DaoMarca implements IntMarca{
    public $where = null;
    public function crear(\EntMarca $marca) {
        try {
            $con = new Conexion();
            $con->ejecutar("insert into marca (MarDescripcion) values('$marca->Descripcion')");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function editar(\EntMarca $marca) {
        try {
            $con = new Conexion();
            $con->ejecutar("update marca set MarDescripcion= '$marca->Descripcion'  where MarCodigo= $marca->id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from marca  where MarCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    public function buscar($id) {
        $marca = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select MarCodigo cod ,MarDescripcion des from marca where MarCodigo= '".$id."' ");
            while ($row = $sql->fetch_array()) {
                $marca=  new EntMarca($row['cod'], $row['des']);
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
            $sql=$con->consultar("select MarCodigo cod ,MarDescripcion des from marca where MarDescripcion LIKE '%" . $this->where . "%'");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntMarca($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
}
?>