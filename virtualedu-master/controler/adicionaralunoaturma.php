<?php

$idTurma = $_POST['idturma'];

$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, "virtualedu");

$query = "UPDATE turma SET qtdalunos = qtdalunos + 1 WHERE idturma = $idTurma";
  mysqli_query($connect,"select * from turma");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Turma cadastrada com sucesso!');window.location.href='../turmas.php'</script>";
    }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar essa turma');window.location.href='../turmas.php'</script>";
    }
    mysqli_close($connect);


?>