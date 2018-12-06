<?php 
$idDisciplina = $_POST['iddisciplina'];
$nome = $_POST['nomedisciplina'];
$ch = $_POST['ch'];


$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, "virtualedu");



	$query = "UPDATE disciplina SET iddisciplina = '$idDisciplina', nome = '$nome', ch = '$ch' WHERE iddisciplina = '$idDisciplina'";
	mysqli_query($connect,"select * from disciplina");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Disciplina atualizada com sucesso!');window.location.href='../disciplinas.php'</script>";
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível atualizar a disciplina');window.location.href='../disciplinas.php'</script>";
    }
    mysqli_close($connect);
 ?>