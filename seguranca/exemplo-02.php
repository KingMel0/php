<?php

$id = (isset($_GET["id"]))?$_GET["id"]:5;

if(!is_numeric($id) || strlen($id) > 5){
	exit("GOTCHYA BITCH!!!");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){

	var_dump($resultado);

}

?>