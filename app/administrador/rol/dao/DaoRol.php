<?php
/**
 * Description of DaoRol
 *
 * @author DocenteUNEMI
 */
class DaoRol implements IntRol {

    public $where = null;

    public function crear(\EntRol $rol) {
        $resultado = '';
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = 'INSERT INTO ROL(DESCRIPCION) VALUES(?)';
            $resultado = sqlsrv_query($con->conn, $sql, array($rol->descripcion));
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $resultado;
    }

    public function editar(\EntRol $rol) {
        $resultado = '';
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = 'UPDATE ROL SET DESCRIPCION = ?  WHERE IDROL = ?';
            $resultado = sqlsrv_query($con->conn, $sql, array($rol->descripcion, $rol->idrol));
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $resultado;
    }

    public function eliminar($id) {
        $resultado = '';
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = 'DELETE ROL WHERE IDROL = ?';
            $resultado = sqlsrv_query($con->conn, $sql, array($id));
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $resultado;
    }

    public function buscar($id) {
        $resultado = '';
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = 'SELECT * FROM ROL WHERE IDROL = ?';
            $resultado = sqlsrv_query($con->conn, $sql, array($id));
            $lista =  sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
            $user = new EntRol($lista['IDROL'], $lista['DESCRIPCION']);
            return $user;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $resultado;
    }

    public function listar() {
        $roles = new ArrayObject();
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = "SELECT * FROM ROL WHERE DESCRIPCION LIKE '%" . $this->where . "%'";
            $resultado = sqlsrv_query($con->conn, $sql);
            while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
                $roles[] = new EntRol($row['IDROL'], $row['DESCRIPCION']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $roles;
    }

}
