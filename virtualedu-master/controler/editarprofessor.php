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



	$query = "UPDATE professor SET nome = '$nome', mat_professor = '$mat', cpf_professor = '$cpf', disc = '$disc', login = '$login', dataNasc = '$datan', senha = '$senha' WHERE mat_professor = '$mat'";
	mysqli_query($connect,"select * from professor");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Professor cadastrado com sucesso!');window.location.href='../professores.php'</script>";
          $qtd = mysqli_query("select qtdaluno from turma where idturma = '$turma'");
          $qtd = $qtd + 1;
          msqli_query($connect,"UPDATE turma SET qtdaluno = '$qtd' WHERE idturma = '$turma'" );
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse aluno');window.location.href='../professores.php'</script>";
    }
    mysqli_close($connect);
 ?>