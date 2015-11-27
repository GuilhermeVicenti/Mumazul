<?php 

include ('body.php');


session_start();



        if (!isset($_SESSION['cod_user'])) {
          header('location: ../login.php');
        }

    

$BODY = new body();




if (isset($_GET['funcionario'])) {

	$BODY->func(); 




}

if (isset($_GET['cadastroequip'])) {

	$BODY->cadastroequip(); 



}

if(isset($_GET['cadastrofornec'])) {

	$BODY->cadastrofornec(); 



}








$BODY->footer();


?>

