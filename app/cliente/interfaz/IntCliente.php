<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Alvaro Villagomez
 */
Interface IntCliente {
   function crear(\EntCliente  $cliente);
    function listar();
    function buscar($id);

}
