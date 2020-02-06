<?php

class DaoCliente implements IntCliente{
  
    public $where= null;
    public function buscar($id) {
         $tipo = null;
        try {
           $con = new conexion();
            $con->conectar();
            $sql = "SELECT * FROM VW_CLIENTE WHERE ID=?";
            $resultado = sqlsrv_query($con->conn, $sql, array($id));
            while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
                 $tipo= new EntCliente($row['ID'], $row['Cédula'], $row['Nombre'],$row['Apellido'],$row['Teléfono'],$row['Dirección']);
           
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipo;
    }

    public function crear(\EntCliente $cliente) {
        try {
           $con = new Conexion();
           $con->ejecutar("insert into cliente(cliNombre, cliApellido, cliTelefono, cliCorreo,cliClave)"
                   . "values('$cliente->cliNombre','$cliente->cliApellido','$cliente->cliTelefono','$cliente->cliCorreo','$cliente->cliClave')");
           
            $con->ejecutar("insert into usuario(UsuNombre, UsuApellido,UsuCorreo,UsuUsername,UsuPassword,RolCodigo,UsuEstado)"
                   . "values('$cliente->cliNombre','$cliente->cliApellido','$cliente->cliCorreo','$cliente->cliCorreo','$cliente->cliClave',2,1)");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }



    public function listar() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = "SELECT * FROM VW_CLIENTE WHERE Cédula LIKE '%" . $this->where . "%'";
            $resultado = sqlsrv_query($con->conn, $sql);
            while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
                $tipos[] = new EntCliente($row['ID'], $row['Cédula'], $row['Nombre'],$row['Apellido'],$row['Teléfono'],$row['Dirección']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
 


}
