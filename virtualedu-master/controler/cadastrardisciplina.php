<?php

$idDisciplina = $_POST['iddisciplina'];
$nomeDisciplina = $_POST['nomedisciplina'];
$cargaHoraria = $_POST['ch'];

$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, "virtualedu");



$query = "INSERT INTO disciplina (iddisciplina,nome,ch) VALUES ('$idDisciplina','$nomeDisciplina','$cargaHoraria')";
	mysqli_query($connect,"select * from disciplina");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Disciplina cadastrada com sucesso!');window.location.href='../disciplinas.php'</script>";
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar essa disciplina');window.location.href='../disciplinas.php'</script>";
    }
    mysqli_close($connect);

?>
