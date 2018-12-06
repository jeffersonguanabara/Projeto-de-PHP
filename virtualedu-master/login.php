<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VirtualEdu | Login</title>

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
    <section class="login-bg login-conteudo d-flex flex-column align-items-center justify-content-center">
        <div class="logo">
            <h1>VirtualEdu</h1>
        </div>
        <div class="login-box">
            <form class="login-form" method="POST"   action="controler/logincontrol.php">
                <h3 class="login-titulo mt-0 text-center">
                    <i class="fas fa-lg fa-fw fa-sign-in-alt"></i>
                    LOGIN
                </h3>
                <div class="form-group">
                    <label class="control-label">E-MAIL</label>
                    <input class="form-control" name="login" id="login" type="text" placeholder="E-mail" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">SENHA</label>
                    <input class="form-control" name="senha" id="senha" type="password" placeholder="Senha">
                </div>
                <div class="form-group btn-container">
                    <button type="submit" class="btn btn-primary btn-block">ENTRAR</button>
                </div>
            </form>
        </div>
    </section>
</body>