<?php
interface IntArticulo {
    function crear(\EntArticulo $art);
    function editar(\EntArticulo $art);
    function eliminar($id);
    function listar();
    function buscar($id);
    function listarMarca();
    function listarCategoria();
    function listarProveedor();
    function listarBanco();
    function listarTipo();
}
?>