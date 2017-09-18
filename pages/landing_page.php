<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conteúdo Trade</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="../vendor/jquery/jquery.js"></script>
    <!-- Custom styles for this template -->
    <link href="../css/blog-home.css" rel="stylesheet">
    <script src="../js/helpers.js"></script>
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
<body class="main-area">

<div class="container">
    <div class="text-center">
       <a href="../index.php"> <img height="50px" class="cover-small" src="../img/cover2.png"/> </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="bg-white">
                <div class="in_pad">
                    <p class="h3_01"> Titulo com duas linhas possivelmente teste testetestetes tetestetesteteste</p>

                    <div class="row">
                        <div class="col-md-5 embed-responsive">
                            <img class="img-responsive" width="350" height="250" src="../img/post_1.jpg"/>
                        </div>

                        <div class="col-md-7">
                            <p class="h6_01 content">
                                Pequeno texto da cahmada Loren Ipsum Ficiet Aut ratur as audanto
                            </p>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card custom-border">

                <div class="text-center newsletter card-header">
                    <p class="news_t1">Faça download já!</p>
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

<footer>
    <div class="container text-center">
        <a href="https://www.facebook.com/Trade-Marketing-1943128225911886/">
          <span class="fa-stack fa-lg face-icon">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>

        <p class="copyright">Copyright &copy; Conteúdo Trade 2017</p>
    </div>
</footer>

</body>
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</html>


<?php
include('../src/db.php');
include('../src/helpers.php');

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



