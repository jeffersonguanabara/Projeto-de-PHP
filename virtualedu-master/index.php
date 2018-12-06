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

    <section class="dashboard d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row mbr-justify-content-center">

                <div class="col-lg-6 mbr-col-md-10">
                    <a href="diarios.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-book fas"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Controle de Diários</h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="turmas.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-chalkboard fas"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Controle de Turmas</h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="disciplinas.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-book-reader fas"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Controle de Disciplinas</h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="professores.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-chalkboard-teacher fas"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Controle de
                                    Professores</h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6"></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="alunos.php">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-user-graduate fas"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Controle de Alunos</h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6"></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </section>
</body>
</html>