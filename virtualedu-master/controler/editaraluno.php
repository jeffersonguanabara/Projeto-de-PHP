<?php 
$nome = $_POST['nome'];
$mat = $_POST['mat'];
$cpf = $_POST['cpf'];
$nomepai = $_POST['nomepai'];
$nomemae = $_POST['nomemae'];
$datan = $_POST['datan'];
$turma = $_POST['turma'];

$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect, "virtualedu");



	$query = "UPDATE aluno SET nome = '$nome', mat_aluno = '$mat', cpf_aluno = '$cpf', nome_Pai = '$nomepai',nome_Mae = '$nomemae', dataNasc = '$datan', idturma = '$turma' WHERE mat_aluno = '$mat'";
	mysqli_query($connect,"select * from aluno");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Aluno cadastrado com sucesso!');window.location.href='../alunos.php'</script>";
          $qtd = mysqli_query("select qtdaluno from turma where idturma = '$turma'");
          $qtd = $qtd + 1;
          msqli_query($connect,"UPDATE turma SET qtdaluno = '$qtd' WHERE idturma = '$turma'" );
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse aluno');window.location.href='../alunos.php'</script>";
    }
    mysqli_close($connect);
 ?>