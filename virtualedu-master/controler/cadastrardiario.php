<?php 
$iddiario = $_POST['cod'];
$idDisciplina = $_POST['iddisciplina'];
$idTurma = $_POST['idturma'];
$nomeDiario = $_POST['nomediario'];
$matProfessor = $_POST['mat_professor'];


$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, "virtualedu");



	$query = "INSERT INTO diario (iddiario,iddisciplina,idturma,mat_professor,nome_diario) VALUES ('$iddiario','$idDisciplina','$idTurma','$matProfessor','$nomeDiario')";
	mysqli_query($connect,"select * from diario");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Diario cadastrado com sucesso!');window.location.href='../diarios.php'</script>";
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse diário');window.location.href='../diarios.php'</script>";
    }
    mysqli_close($connect);
 ?>