<?php
interface IntTipo {
    function crear(\EntTipo $tipo);
    function editar(\EntTipo $tipo);
    function eliminar($id);
    function listar();
    function buscar($id);
}
?>