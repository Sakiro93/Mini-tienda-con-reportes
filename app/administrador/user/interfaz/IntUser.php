<?php
/**
 * Description of IntCategoria
 *
 * @author DocenteUNEMI
 */
interface IntUser{
    function crear(\EntUser $user);
    function editar(\EntUser $user);
    function eliminar($id);
    function listar();
    function buscar($id);
}
