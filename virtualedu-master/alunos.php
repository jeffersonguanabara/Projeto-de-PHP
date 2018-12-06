<?php 

$conn = new mysqli('localhost', 'root', '', 'virtualedu');

$sql = "SELECT * FROM aluno";
$result = $conn->query($sql);


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
                  <h1>ALUNOS</h1>
              </div>
          </div>
          <div class="col-12 d-flex justify-content-center mt-5 mb-5">
              <button type="button" name="addAluno" id="addAluno" class="addButton btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Adicionar Aluno</button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Adicionar Aluno</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <form method="POST" action="controler/cadastraraluno.php">
                          <div class="modal-body">
                              <div class="modal-body mx-3">
                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-email">Nome Completo</label>
                                      <input type="text" name="nome" id="nome" class="form-control validate">
                                  </div>

                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-matricula">Matrícula</label>
                                      <input type="number" name="mat" id="mat" class="form-control validate">
                                  </div>
                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-cpf">CPF</label>
                                      <input type="number" name="cpf" id="cpf" class="form-control validate">
                                  </div>
                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-nome-pai">Nome do Pai</label>
                                      <input type="text" name="nomepai" id="nomepai" class="form-control validate">
                                  </div>
                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-nome-mae">Nome da Mãe</label>
                                      <input type="text" name="nomemae" id="nomemae" class="form-control validate">
                                  </div>
                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-nascimento">Data de
                                      Nascimento</label>
                                      <input type="date" name="datan" id="datan" class="form-control validate">
                                  </div>
                                  <div class="form-group">
                                      <label data-error="wrong" data-success="right" for="defaultForm-turma">Turma</label>
                                      <input type="number" name="turma" id="turma" class="form-control validate">
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

          <!-- listar Alunos -->
          <div id="accordion" class="listaElementos">
          <?php if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) { ?>
                  <div class="card">
                      <div class="card-header" id="heading<?php echo $row['mat_aluno']; ?>" data-toggle="collapse" data-target="#collapse<?php echo $row['mat_aluno']; ?>" aria-expanded="true"
                      aria-controls="collapseOne">
                          <h5 class="mb-0">
                              <?php echo $row['nome']; ?>
                          </h5>
                        </div>
                      <div id="collapse<?php echo $row['mat_aluno']; ?>" class="collapse" aria-labelledby="heading<?php echo $row['mat_aluno']; ?>" data-parent="#accordion">
                          <div class="card-body">
                              <div class="col-12 d-flex">
                                  <div class="col-9">
                                      <p>Matrícula:<br />
                                          <span><?php echo $row['mat_aluno']; ?></span>
                                      </p>
                                      <p>CPF:<br />
                                          <span><?php echo $row['cpf_aluno']; ?></span>
                                      </p>
                                      <p>Nome do Pai:<br>
                                          <span><?php echo $row['nome_Pai']; ?></span>
                                      </p>
                                      <p>Nome da Mãe:<br>
                                          <span><?php echo $row['nome_Mae']; ?></span>
                                      </p>
                                      <p>Data de Nascimento:<br>
                                          <span><?php echo $row['dataNasc']; ?></span>
                                      </p>
                                      <p>Turma:<br>
                                          <span><?php echo $row['idturma']; ?></span>
                                      <p>
                                  </div>
                                  <div class="col-3">
                                      <button type="button" name="editAluno" id="editAluno" class="btn btn-info btn-xs btn-block" data-toggle="modal" data-target="#editAlunoModal">Editar</button>
                                      <button type="button" name="deleteAluno" id="deleteAluno" class="btn btn-danger btn-xs btn-block">Excluir</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Modal editAluno-->
                  <div class="modal fade" id="editAlunoModal" tabindex="-1" role="dialog" aria-labelledby="editAlunoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Editar Aluno</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                  </button>
                              </div>
                              <form method="POST" action="controler/editaraluno.php">
                                  <div class="modal-body">
                                      <div class="modal-body mx-3">
                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-email">Nome Completo</label>
                                              <input type="text" name="nome" id="nome" class="form-control validate">
                                          </div>

                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-matricula">Matrícula</label>
                                              <input type="number" name="mat" id="mat" class="form-control validate">
                                          </div>
                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-cpf">CPF</label>
                                              <input type="number" name="cpf" id="cpf" class="form-control validate">
                                          </div>
                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-nome-pai">Nome do Pai</label>
                                              <input type="text" name="nomepai" id="nomepai" class="form-control validate">
                                          </div>
                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-nome-mae">Nome da Mãe</label>
                                              <input type="text" name="nomemae" id="nomemae" class="form-control validate">
                                          </div>
                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-nascimento">Data de
                                              Nascimento</label>
                                              <input type="date" name="datan" id="datan" class="form-control validate">
                                          </div>
                                          <div class="form-group">
                                              <label data-error="wrong" data-success="right" for="defaultForm-turma">Turma</label>
                                              <input type="number" name="turma" id="turma" class="form-control validate">
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
  </section>

</body>

</html>