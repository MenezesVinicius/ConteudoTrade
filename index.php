<?php
include('src/db.php');
include('src/helpers.php');

global $con;
$helper = new helpers();
date_default_timezone_set('America/Sao_Paulo');
$dataLocal = date('Y/m/d H:i:s', time());

if (isset($_POST['submit'])) {

    global $con;
    $helper = new helpers();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $timestamp = strtotime($dataLocal);

    if (!get_magic_quotes_gpc()) {
        $email = addslashes($email);
        $nome = addslashes($nome);
    }

    $ip = $helper->getIP();

    $sql = "INSERT INTO leads (nome, email, ip, timestamp) VALUES ('$nome', '$email', '$ip', '$timestamp')";
    $result = mysqli_query($con, $sql) or print("Can't insert into table php_blog.<br />" . $sql . "<br />" . mysql_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Conteúdo Trade</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <script src="js/helpers.js"></script>

</head>

<body class="bg-light">

<header>
    <img src="img/cover.png" class="img-fluid cover" alt="Responsive image">
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4 my-4">
                <div class="media">
                    <img class="d-flex post-image" src="img/post_1.jpg" alt="Generic placeholder image">

                    <div class="media-body">
                        <div class="card-body">
                            <a href="pages/single_post.php"><h2 class="card-title">Aprenda a diferença entre Shopper e
                                    Consumidor</h2></a>

                            <p class="card-text">Por que a diferença é tão importante para as técnicas de varejo da
                                atualidade!</p>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-muted">
                    Postado 17 de Setembro, 2017

                </div>
            </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Widget -->
            <!--<div class="card my-4">-->
            <!--<div class="card-body">-->
            <!--You can put anything you want inside of these side widgets. They are easy to use, and feature the-->
            <!--new Bootstrap 4 card containers!-->
            <!--</div>-->
            <!--</div>-->

            <!-- Search Widget -->
            <div class="card my-4">

                <div class="text-center newsletter card-header">
                    <p class="news_t1">Trade Marketing</p>

                    <p class="news_t2">Newsletter</p>

                    <p class="news_call text-left">Quer aprender mais sobre vendas e Trade Marketing? Se inscreva na
                        nossa newsletter semanal e saia na frente com conteúdo exclusivo e selecionado! </p>

                </div>
                <div class="card-body ">
                    <form id="contact"  method="post" onsubmit="return validate()" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <fieldset>
                            <label> Nome completo: </label>
                            <input placeholder="Seu Nome Completo" type="text" tabindex="1" name="nome" id="nome_form" required>
                        </fieldset>
                        <fieldset>
                            <label> Email profissional: </label>
                            <input placeholder="seu@email.com.br" type="email" tabindex="3" name="email" required>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="submit">Quero Receber</button>
                        </fieldset>
                    </form>
                </div>
            </div>


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container text-center">
        <a href="https://www.facebook.com/Trade-Marketing-1943128225911886/">
          <span class="fa-stack fa-lg face-icon">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>

        <p class="m-2 text-center text-white">Copyright &copy; Conteúdo Trade 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
