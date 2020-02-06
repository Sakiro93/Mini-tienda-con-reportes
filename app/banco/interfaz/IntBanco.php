<?php
interface IntBanco{
    function crear(\EntBanco $banco);
    function editar(\EntBanco $banco);
    function eliminar($id);
    function listar();
    function buscar($id);
}
?>