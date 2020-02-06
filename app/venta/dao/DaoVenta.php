<?php
class DaoVenta implements IntVenta{
    public $where = null;
    public function crear(\EntVenta $venta) {
        $stock = $this->buscarStock($venta->IdArticulo);
        $nuevostock = intval($stock) - intval($venta->Cantidad);
        try {
            $con = new Conexion();
            $con->ejecutar("insert into venta(UsuCodigo, ArtCodigo, VenCuenta, BanCodigo, TipCodigo, VenCantidad, VenTotal, VenFecha) values('$venta->IdUsuario','$venta->IdArticulo','$venta->Cuenta','$venta->IdBanco','$venta->IdTipo','$venta->Cantidad','$venta->Total', NOW())");          
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
        if (intval($nuevostock) > 0){
            $this->actualizarStock($venta->IdArticulo, $nuevostock, TRUE);
        } else {
            $this->actualizarStock($venta->IdArticulo, $nuevostock, FALSE);
        }
        
    }
    
    public function actualizarStock($id, $stock, $est) {
        try {
            $con = new conexion();
            $con->ejecutar("update articulo set ArtStock ='$stock', ArtEstado='$est' where ArtCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    
    public function buscarStock($id) {
       $stock = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select ArtStock stock from articulo where ArtCodigo = $id");
            while ($row = $sql->fetch_array()) {
                $stock = $row['stock'];
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $stock;
        
        
    }
    
    public function editar(\EntVenta $venta) {
        try {
            $con = new Conexion();
            $con->ejecutar("update venta set UsuCodigo = '" . $venta->IdUsuario . "' ," . "ArtCodigo='" . $venta->IdArticulo . "' ," . "VenCuenta='" . $venta->Cuenta . "' ," . "BanCodigo='" . $venta->IdBanco . "' ," . "TipCodigo='" . $venta->IdTipo . "' ," . "VenCantidad='" . $venta->Cantidad . "' ," . "VenTotal='" . $venta->Total . "' ," . " VenFecha= NOW() where VenCodigo= '" . $venta->Id . "'");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function eliminar($id) {
        try {
            $con = new conexion();
            $con->ejecutar("delete from venta  where VenCodigo = $id");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        
    }
    public function buscar($id) {
        $venta = null;
        try {
            $con = new conexion();
            $sql=$con->consultar("select VenCodigo cod , UsuNombre usu, ArtNombre art, VenCuenta cuent, BanDescripcion ban, TipDescripcion tip, VenCantidad cant, VenTotal tot, VenFecha fec "
                    . "from venta v, usuario u, articulo a, banco b, tipocuenta t "
                    . "where v.UsuCodigo = u.UsuCodigo AND v.ArtCodigo = a.ArtCodigo AND v.BanCodigo = b.BanCodigo AND v.TipCodigo = t.TipCodigo AND  v.VenCodigo= '" . $id . "' ");
            while ($row = $sql->fetch_array()) {
                $venta = new EntVenta($row['cod'], $row['usu'], $row['art'], $row['cuent'], $row['ban'], $row['tip'], $row['cant'], $row['tot'], $row['fec']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $venta;
    }
    public function listar() {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql=$con->consultar("select VenCodigo cod , UsuNombre usu, ArtNombre art, VenCuenta cuent, BanDescripcion ban, TipDescripcion tip, VenCantidad cant, VenTotal tot, VenFecha fec "
                    . "from venta v, usuario u, articulo a, banco b, tipocuenta t "
                    . "where v.UsuCodigo = u.UsuCodigo AND v.ArtCodigo = a.ArtCodigo AND v.BanCodigo = b.BanCodigo AND v.TipCodigo = t.TipCodigo AND  (ArtNombre LIKE '%" . $this->where . "%' OR UsuNombre LIKE '%" . $this->where . "%' OR VenCodigo LIKE '%" . $this->where . "%' OR BanDescripcion LIKE '%" . $this->where . "%' ) GROUP BY VenCodigo");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntVenta($row['cod'], $row['usu'], $row['art'], $row['cuent'], $row['ban'], $row['tip'], $row['cant'], $row['tot'], $row['fec']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
    
    public function filtrarVenta($id) {
        $tipos = new ArrayObject();
        try {
            $con = new Conexion();
            $sql=$con->consultar("select VenCodigo cod , UsuNombre usu, ArtNombre art, VenCuenta cuent, BanDescripcion ban, TipDescripcion tip, VenCantidad cant, VenTotal tot, VenFecha fec "
                    . "from venta v, usuario u, articulo a, banco b, tipocuenta t "
                    . "where v.UsuCodigo='$id' AND v.UsuCodigo = u.UsuCodigo AND v.ArtCodigo = a.ArtCodigo AND v.BanCodigo = b.BanCodigo AND v.TipCodigo = t.TipCodigo AND  (ArtNombre LIKE '%" . $this->where . "%' OR VenCodigo LIKE '%" . $this->where . "%' OR BanDescripcion LIKE '%" . $this->where . "%') GROUP BY VenCodigo");
            
            while ($row = $sql->fetch_array()) {
            $tipos[] = new EntVenta($row['cod'], $row['usu'], $row['art'], $row['cuent'], $row['ban'], $row['tip'], $row['cant'], $row['tot'], $row['fec']);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $tipos;
    }
}
?>