<?php
interface IntProveedor {
    function crear(\EntProveedor $cat);
    function editar(\EntProveedor $cat);
    function eliminar($id);
    function listar();
    function buscar($id);
}
?>