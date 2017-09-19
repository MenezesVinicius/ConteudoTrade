<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Conteúdo Trade</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="vendor/jquery/jquery.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <script src="js/helpers.js"></script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106570963-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments)
        }
        ;
        gtag('js', new Date());

        gtag('config', 'UA-106570963-1');
    </script>
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
					<div class="row">
						<div class="col-xs-12 col-sm-11 col-md-4">
						<img class="d-flex img-fluid  post-image" src="img/post_2.jpg" alt="Generic placeholder image">
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="media-body">
							<div class="card-body">
								<a href="pages/second_post.php"><h2 align="justify" class="card-title">A tecnologia muda seu cliente, você está mudando junto com ele?</h2></a>

								<p align="justify" class="card-text">Fatores tecnológicos, junto com o cenário econômico estão mudando o cenário de vendas como conhecemos, e é seu dever repensar como lidar com seus clientes.</p>
							</div>
						</div>
						</div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Postado 18 de Setembro, 2017
                </div>
            </div>
			
			
            <div class="card mb-4 my-4">
                <div class="media">
					<div class="row">
						<div class="col-xs-12 col-sm-11 col-md-4">
						<img class="d-flex img-fluid  post-image" src="img/post_1.jpg" alt="Generic placeholder image">
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="media-body">
							<div class="card-body">
								<a href="pages/first_post.php"><h2 align="justify" class="card-title">Aprenda a diferença entre Shopper e
										Consumidor</h2></a>

								<p align="justify" class="card-text">Por que a diferença é tão importante para as técnicas de varejo da
									atualidade!</p>
							</div>
						</div>
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

                    <p align="justify" class="news_call text-left">Quer aprender mais sobre vendas e Trade Marketing? Se inscreva na
                        nossa newsletter semanal e saia na frente com conteúdo exclusivo e selecionado! </p>

                </div>
                <div class="card-body card-form">
                    <form id="contact" method="post" onsubmit="return validate()"
                          action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <fieldset>
                            <label> Nome completo: </label>
                            <input placeholder="Seu Nome Completo" type="text" tabindex="1" name="nome" id="nome_form"
                                   required>
                        </fieldset>
                        <div class="alert alert-danger" role="alert" id="alert_nome" style="display: none">
                            Nome inválido!
                        </div>
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

    <!-- Modal -->
    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Obrigado!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Inscrição feita com sucesso! Bem vindo a nossa newsletter!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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

    if (($email = filter_var($email, FILTER_VALIDATE_EMAIL)) !== false) {
        if (stristr($email, '@gmail.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@hotmail.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@yahoo.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@bol.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@live.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@msn.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@ig.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@oi.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@zipmail.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@uol.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@terra.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@r7.com') !== false) {
            $tipo = "B2C";
        } else if (stristr($email, '@globomail.com') !== false) {
            $tipo = "B2C";
        } else {
            $tipo = "B2B";
        }
    }

    $ip = $helper->getIP();

    $sql = "INSERT IGNORE INTO leads (nome, email, ip, timestamp, tipo) VALUES ('$nome', '$email', '$ip', '$timestamp', '$tipo')";
    $result = mysqli_query($con, $sql) or print("Can't insert into table php_blog.<br />" . $sql . "<br />" . mysql_error());
    echo "<script>
             $('#thankyouModal').modal('show');
          </script>";
}

?>
