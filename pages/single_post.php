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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/blog-home.css" rel="stylesheet">
    <script src="../js/helpers.js"></script>
</head>

<body class="bg-light">

<header>
    <a href="../index.php"><img src="../img/cover.png" class="img-fluid cover" alt="Responsive image"></a>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <!-- Title -->
            <h1 class="mt-4">Aprenda a diferença entre Shopper e Consumidor</h1>
            <h6>Por que a diferença é tão importante para as técnicas de varejo da atualidade!</h6>

            <hr>
            <!-- Date/Time -->
            <p>Postado 17 de Setembro, 2017</p>

            <hr>

            <!-- Post Content -->
            <p>Muito se fala, na hora de vender o produto, sobre a importância de se colocar sob o ponto de vista do
                consumidor. As empresas em geral buscam oferecer ao cliente a melhor experiência possível na hora da
                compra, pensando nisso, é essencial o entendimento da diferença entre shopper e consumidor.</p>

            <h3>Então quem é consumidor e quem é o Shopper?</h3>

            <p>Consumidor é a pessoa que usa, consome o bem-serviço adquirido, seja por ela ou por outra pessoa.</p>


            <p>Shopper é a pessoa que irá comprar tal produto, quem escolhe onde comprar e se estabelece tal
                comportamento no ponto de venda, ou seja, é quem passa pelos estímulos no processo de interação com
                produtos e processos de vendas.</p>

            <p>Observe que o papel do consumidor e do shopper podem não ser exercidos pela mesma pessoa. Um exemplo
                é quando o marido compra um esmalte para sua esposa, ele exerce o papel de shopper enquanto ela é a
                consumidora.
            </p>

            <h3>Mas por que a diferença importa?</h3>

            <p>É importantíssimo principalmente para as empresas que trabalham com trade marketing compreender essa
                diferença e conhecer muito bem seu público alvo, para a partir daí desenvolverem suas estratégias.
            </p>

            <p>Atualmente o cliente tem acesso à diversos canais de compras, fácil acesso à informação, o que o
                torna mais exigente. Isso faz com que o desafio das empresas cada seja vez maior, pois o cliente não
                busca mais apenas apenas adquirir algo, e sim o benefício que aquele produto-serviço irá
                proporcionar. </p>

            <p> É preciso ter em mente que o cliente, indiferente de ser o consumidor final ou não, está em busca de
                algo que alcance ou supere suas expectativas e as empresas e seus colaboradores devem trabalhar
                sempre em prol deste fator. </p>


        </div>


        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

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
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
