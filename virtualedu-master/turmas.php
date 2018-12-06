<?php 

$conn = new mysqli('localhost', 'root', '', 'virtualedu');

$sql = "SELECT * FROM turma";
$result = $conn->query($sql);


?>

<?php 

$conn = new mysqli('localhost', 'root', '', 'virtualedu');

$sql = "SELECT * FROM aluno";
$test = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>VirtualEdu | Início</title>

  <!-- CSS Principal -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Bootstrap 4 + Jquery -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!---->
  <!-- Font Awesome 5.5.0 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <!---->
</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'sidebar.php' ?>

    <section class="sectionVirtualEdu">
        <div class="container">
            <div class="row">
                <div class="col-12 pl-3 mt-5">
                    <h1>TURMAS</h1>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-5 mb-5">
                <button type="button" name="addAluno" id="addAluno" class="addButton btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Adicionar Turma</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Turma</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form method="POST" action="controler/cadastrarturma.php">
                            <div class="modal-body">
                                <div class="modal-body mx-3">
                                    <div class="form-group">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Código da Turma</label>
                                        <input type="text" name="idturma" id="idturma" class="form-control validate">
                                    </div>

                                    <div class="form-group">
                                        <label data-error="wrong" data-success="right" for="defaultForm-matricula">Nome da Turma</label>
                                        <input type="text" name="nometurma" id="nometurma" class="form-control validate">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- lista -->
            <div id="accordion" class="listaElementos">
                <?php if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $row['idturma']; ?>" data-toggle="collapse" data-target="#collapse<?php echo $row['idturma']; ?>" aria-expanded="true"
                            aria-controls="collapseOne">
                            <h5 class="mb-0">
                              <?php echo $row['nometurma']; ?>
                            </h5>
                        </div>
                        <div id="collapse<?php echo $row['idturma']; ?>" class="collapse" aria-labelledby="heading<?php echo $row['idturma']; ?>" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-12 d-flex">
                                    <div class="col-9">
                                        <p>
                                            Quantidade de Alunos:<br />
                                            <span><?php echo $row['qtdalunos']; ?></span>
                                        </p>
                                    </div>
                                    <div class="col-3">
                                        <button type="button" name="addAluno" id="addAluno" class="btn btn-info btn-xs btn-block" data-toggle="modal" data-target="#listaModal">Adicionar Aluno</button>
                                        <button type="button" name="deleteAluno" id="deleteAluno" class="btn btn-danger btn-xs btn-block">Excluir</button>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- lista de Alunos -->
                        <div class="modal fade" id="listaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Adicionar alunos a turma</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div id="accordion" class="listaElementos">
                                            <?php if ($test->num_rows > 0) {
                                            while($row = $test->fetch_assoc()) { ?>
                                                <div class="card">
                                                    <div class="card-header" id="heading<?php echo $row['mat_aluno']; ?>" data-toggle="collapse" data-target="#collapse<?php echo $row['mat_aluno']; ?>" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                        <h5 class="mb-0">
                                                            <?php echo $row['nome']; ?>
                                                        </h5>

                                                        <div class="col-3">
                                                            <form method="POST" action="controler/adicinaralunoaturma.php">
                                                                <button type="button" name="addAlunoTurma" id="heading<?php echo $row['idturma']; ?>"" class="btn btn-info btn-xs btn-block glyphicon glyphicon-plus"></button>
                                                                <button type="button" name="deleteAluno" id="deleteAluno" class="btn btn-danger btn-xs btn-block">Excluir</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php }else { ?>
                                                <div class="card">
                                                  <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <h5 class="mb-0">
                                                      <?php echo 'SEM RESULTADOS' ?>
                                                    </h5>
                                                  </div>
                                                </div>            
                                            <?php } ?>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>     
                <?php } ?>
                <?php } else { ?>
                <div class="card">
                  <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h5 class="mb-0">
                        <?php echo 'SEM RESULTADOS' ?>
                      </h5>
                  </div>
                </div>            
                <?php } ?>
            </div>                                
        </div>
    </section>
</body>

</html>