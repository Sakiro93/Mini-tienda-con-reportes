<?php
class DaoUser implements IntUser{

    public $where = null;

    public function crear(\EntUser $user) {
        $resultado = '';
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = 'INSERT INTO USUARIO(NOMBRE, USERNAME, PASS, IDROL) VALUES(?, ?,?, ?)';
            $resultado = sqlsrv_query($con->conn, $sql, array($user->nombre, $user->username, 
                $user->pass, $user->idrol));
            return $resultado;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $resultado;
    }

    public function editar(\EntUser $user) {
        $resultado = '';
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = 'UPDATE USUARIO SET NOMBRE = ?, USERNAME = ?, PASS = ?, IDROL = ? WHERE IDUSUARIO = ?';
            $resultado = sqlsrv_query($con->conn, $sql, array($user->nombre, $user->username, 
                $user->pass, $user->idrol, $user->idusuario));
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
            $sql = 'DELETE USUARIO WHERE IDUSUARIO = ?';
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
            $sql = 'SELECT * FROM USUARIO WHERE IDUSUARIO = ?';
            $resultado = sqlsrv_query($con->conn, $sql, array($id));
            $lista =  sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
            $user = new EntUser($lista['IDUSUARIO'], $lista['NOMBRE'], 
                    $lista['USERNAME'], $lista['PASS'], $lista['IDROL']);
            return $user;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $resultado;
    }

    public function listar() {
        $users = new ArrayObject();
        try {
            $con = new Conexion();
            $con->conectar();
            $sql = "SELECT U.IDUSUARIO, U.NOMBRE, U.USERNAME, U.PASS, U.IDROL, R.IDROL 'IDROL', R.DESCRIPCION 'ROL' "
                    . "FROM USUARIO U, ROL R WHERE U.IDROL = R.IDROL AND USERNAME LIKE '%" . $this->where . "%'";
            $resultado = sqlsrv_query($con->conn, $sql);
            while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
                $users[] = new EntUser($row['IDUSUARIO'], $row['NOMBRE'], 
                    $row['USERNAME'], $row['PASS'], $row['IDROL'].'|'.$row['ROL']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $users;
    }
    
}
