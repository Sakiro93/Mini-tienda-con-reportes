<?php
/**
 * Description of IntCategoria
 *
 * @author DocenteUNEMI
 */
interface IntRol {
    function crear(\EntRol  $rol);
    function editar(\EntRol $rol);
    function eliminar($id);
    function listar();
    function buscar($id);

}
