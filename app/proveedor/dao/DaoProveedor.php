<?php
class DaoProveedor implements IntProveedor{
    public $where = null;
    public function crear(\EntProveedor $cat) {
        try {
            $con = new Conexion();
            $con->ejecutar("insert into proveedor(ProNombre, ProRuc, ProDireccion, ProTelefono, ProCorreo, ProEstado)values('$cat->Nombre','$cat->Ruc','$cat->Direccion','$cat->Telefono','$cat->Correo','$cat->Estado')");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function editar(\EntProveedor $cat) {
        try {
            $con = new Conexion();
            $con->ejecutar("update proveedor set ProNombre= '$cat->Nombre',ProRuc= '$cat->Ruc' ,ProDireccion= '$cat->Direccion' ,ProTelefono= '$cat->Telefono' ,ProCorreo= '$cat->Correo' ,ProEstado= '$cat->Estado' where ProCodigo= $cat->Id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from proveedor  where ProCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    public function buscar($id) {
        $marca = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select ProCodigo cod ,ProNombre nom, ProRuc ruc,ProDireccion dir,ProTelefono tef,ProCorreo corr, ProEstado est from proveedor  where ProCodigo= '".$id."' ");
            while ($row = $sql->fetch_array()) {
                $marca=  new  EntProveedor($row['cod'], $row['nom'], $row['ruc'], $row['dir'], $row['tef'],$row['corr'], $row['est']== '1'? true:false);
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
            $sql=$con->consultar("select ProCodigo cod ,ProNombre nom, ProRuc ruc,ProDireccion dir,ProTelefono tef,ProCorreo corr, ProEstado est "
                    . "from proveedor "
                    . "where ProNombre LIKE '%" . $this->where . "%'");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntProveedor($row['cod'], $row['nom'], $row['ruc'], $row['dir'], $row['tef'],$row['corr'], $row['est']== '1'? true:false);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
}
?>