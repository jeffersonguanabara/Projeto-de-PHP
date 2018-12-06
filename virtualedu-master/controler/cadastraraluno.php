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



	$query = "INSERT INTO aluno (nome,mat_aluno,cpf_aluno,nome_Pai,nome_Mae,dataNasc,idturma) VALUES ('$nome','$mat','$cpf','$nomepai','$nomemae','$datan','$turma')";
	mysqli_query($connect,"select * from aluno");
    $insert = mysqli_query($connect,"$query");
    if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Aluno cadastrado com sucesso!');window.location.href='../alunos.php'</script>";
          $qtd = mysqli_query("select qtd from turma where idturma = '$turma'");
          $qtd = $qtd +1;
          mysqli_query($connect,"INSERT INTO turma (qtdalunos) values ('$qtd') where idturma='$turma'");
	}else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse aluno');window.location.href='../alunos.php'</script>";
    }
    mysqli_close($connect);
 ?>