<?php
interface IntVenta {
    function crear(\EntVenta $venta);
    function editar(\EntVenta $venta);
    function eliminar($id);
    function listar();
    function buscar($id);
    function filtrarVenta($id);
    function actualizarStock($id, $stock, $est);
    function buscarStock($id);
}
?>