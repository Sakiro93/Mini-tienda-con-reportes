<?php
if(!isset($u)){
    $u ='';
}
if (session_id() == '') {
    session_start();
}
if (empty($_SESSION['_USER_'])) {
    header('location:'.$u.'login.php');    
}
$user = $_SESSION['_USER_'];
?>