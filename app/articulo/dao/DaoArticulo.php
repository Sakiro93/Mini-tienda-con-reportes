<?php

class DaoArticulo implements IntArticulo {

    public $where = null;

    public function crear(\EntArticulo $art) {
        try {
            $con = new Conexion();
            $con->ejecutar("insert into articulo(ArtFoto, ArtNombre, ArtDescripcion, CatCodigo, MarCodigo, ProCodigo, ArtPrecio, ArtStock, ArtEstado) values('$art->Foto','$art->Nombre','$art->Descripcion','$art->IdCategoria','$art->IdMarca','$art->IdProveedor','$art->Precio','$art->Stock','$art->Estado')");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function editar(\EntArticulo $art) {
        try {
            $con = new Conexion();
            $con->ejecutar("update articulo set ArtFoto = '" . $art->Foto . "' ," . "ArtNombre='" . $art->Nombre . "' ," . "ArtDescripcion='" . $art->Descripcion . "' ," . "CatCodigo='" . $art->IdCategoria . "' ," . "MarCodigo='" . $art->IdMarca . "' ," . "ProCodigo='" . $art->IdProveedor . "' ," . "ArtPrecio='" . $art->Precio . "' ," . "ArtStock='" . $art->Stock . "' ," . "ArtEstado='" . $art->Estado . "' where ArtCodigo= '" . $art->Id . "'");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from articulo where ArtCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function buscar($id) {
        $art = null;
        try {
            $con = new conexion();
            $sql = $con->consultar("select ArtCodigo cod , ArtFoto fot, ArtNombre nom, ArtDescripcion des, CatCodigo cat, MarCodigo mar, ProCodigo pro, ArtPrecio pre, ArtStock sto, ArtEstado est "
                    . "from articulo where ArtCodigo= '" . $id . "' ");
            while ($row = $sql->fetch_array()) {
                $art = new EntArticulo($row['cod'], $row['fot'], $row['nom'], $row['des'], $row['cat'], $row['mar'], $row['pro'], $row['pre'], $row['sto'], $row['est'] == '1' ? true : false);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $art;
    }

    public function listar() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql = $con->consultar("select ArtCodigo cod , ArtFoto fot, ArtNombre nom, ArtDescripcion des, CatDescripcion cat, MarDescripcion mar, ProNombre pro, ArtPrecio pre, ArtStock sto, ArtEstado est "
                    . "from articulo a, categoria c, marca m, proveedor p "
                    . "where a.CatCodigo = c.CatCodigo AND a.MarCodigo = m.MarCodigo AND a.ProCodigo = p.ProCodigo AND (ArtNombre LIKE '%" . $this->where . "%' OR ArtDescripcion LIKE '%" . $this->where . "%' OR MarDescripcion LIKE '%" . $this->where . "%') GROUP BY ArtCodigo");

            while ($row = $sql->fetch_array()) {
                $tipos[] = new EntArticulo($row['cod'], $row['fot'], $row['nom'], $row['des'], $row['cat'], $row['mar'], $row['pro'], $row['pre'], $row['sto'], $row['est'] == '1' ? true : false);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }

    public function listarMarca() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql = $con->consultar("select MarCodigo cod ,MarDescripcion des from marca");

            while ($row = $sql->fetch_array()) {
                $tipos[] = new EntMarca($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }

    public function listarCategoria() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql = $con->consultar("select CatCodigo cod ,CatDescripcion des from categoria");

            while ($row = $sql->fetch_array()) {
                $tipos[] = new EntCategoria($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }

    public function listarProveedor() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql = $con->consultar("select ProCodigo cod ,ProNombre nom from proveedor");

            while ($row = $sql->fetch_array()) {
                $tipos[] = new EntProveedor($row['cod'], $row['nom']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }

    public function listarBanco() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql = $con->consultar("select BanCodigo cod ,BanDescripcion des from banco");

            while ($row = $sql->fetch_array()) {
                $tipos[] = new EntCategoria($row['cod'], $row['des']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
    
    public function listarTipo() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql = $con->consultar("select TipCodigo cod ,TipDescripcion des from tipocuenta");

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