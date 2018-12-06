<?php 
$nome = $_POST['nome'];
$mat = $_POST['mat'];
$cpf = $_POST['cpf'];
$disc = $_POST['disc'];
$datan = $_POST['datan'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, "virtualedu");



	$query = "INSERT INTO professor (nome,mat_professor,cpf_professor,iddisciplina,dataNasc,login,senha) VALUES ('$nome','$mat','$cpf','$disc','$datan','$login','$senha')";
	mysqli_query($connect,"select * from aluno");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Professor cadastrado com sucesso!');window.location.href='../professores.php'</script>";
          
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse Professor');window.location.href='../professores.php'</script>";
    }
    mysqli_close($connect);
 ?>