<?php

include "c_programKerja.php";

$controller = new c_proker();

if(isset($_GET['e'])){
	$nomor = $_GET['e'];
	$controller->viewEdit($nomor);
}else if(isset($_GET['d'])){
	$nomor = $_GET['d'];
	$controller->delete($nomor);
}else if(isset($_GET['i'])){
	$controller->viewInsert();
}else{
	$controller->index();
}
