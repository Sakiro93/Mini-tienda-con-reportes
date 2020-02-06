<?php
interface IntCategoria {
    function crear(\EntCategoria $cat);
    function editar(\EntCategoria $cat);
    function eliminar($id);
    function listar();
    function buscar($id);
}
?>