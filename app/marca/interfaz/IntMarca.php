<?php
interface IntMarca {
    function crear(\EntMarca $piso);
    function editar(\EntMarca $piso);
    function eliminar($id);
    function listar();
    function buscar($id);
}
?>