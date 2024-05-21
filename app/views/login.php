<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GestorLTE </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box"
    >
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo URL_BASE ?>assets/index2.html" class="h1"><b>Gestor</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Faça login para iniciar sua sessão</p>
                <?php $this->verMSG();
                $this->verERRO() ?>
                <form action="<?php echo URL_BASE ?>login/autenticar" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="senha" placeholder="senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Lembrar
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">
                        Entrar
                    </button>
                </form>
                <div class="social-auth-links text-center mt-2 mb-3">                  
                    <a href="<?php echo URL_BASE ?>login/registrar" class="btn btn-block btn-danger">
                        Cadastrar
                    </a>
                </div>
                <p class="mb-1">
                    <a href="#">Seu IP <?php echo $public_ip  ?></a>
                </p>
            </div>
        </div>
    </div>
    <script src="<?php echo URL_BASE ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>