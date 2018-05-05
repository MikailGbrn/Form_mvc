<?php 

session_start();

set_include_path("class/");
spl_autoload_extensions(".class.php");
spl_autoload_register();

if (isset($_SESSION["session"])) {
	$data = $_POST;
	$c = new ControllerForm();
	$c->view($data);
	session_destroy();
}

else{
	$c = new ControllerForm();
	$c->form();
}

 ?>