<?php

class DaoLogin implements IntLogin {

    public function login($cuenta, $passw) {
        $user = null;
        try {
            $con = new Conexion();
            $sql= $con->consultar("SELECT U.UsuCodigo 'ID', U.UsuNombre 'NOMBRE',U.UsuApellido 'APELLIDO', U.UsuNombre 'USUARIO', U.RolCodigo 'UROL',
             R.ROlCodigo 'IDROL', R.RolDescripcion 'ROL' FROM usuario U JOIN rol R ON R.RolCodigo = U.RolCodigo
                WHERE U.UsuUsername ='".$cuenta."' AND U.UsuPassword='".$passw."'");
    
            $u =  $sql->fetch_array();
            if ($u['ID'] != '') {
                $user = new EntLogin();
                $user->logId = $u['ID'];
                $user->login = $u['USUARIO'];
                $user->rol = $u['UROL'];
                $user->lognombre = $u['ROL'] . ' | ' . $u['NOMBRE'].' '.$u['APELLIDO'];
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        return $user;
    }

}

?>