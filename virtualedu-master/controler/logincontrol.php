<?php 
$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == 'admin' && $senha == 'admin' ){
	echo"<script language='javascript' type='text/javascript'>alert('Bem vindo!');window.location.href='../index.php'</script>";
}else{
	echo"<script language='javascript' type='text/javascript'>alert('Login ou senha estão errados');window.location.href='../login.php'</script>";
}

 ?>