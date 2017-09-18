<?php

include('db.php');
include('helpers.php');

global $con;

$current_month = date("F");
$current_date = date("d");
$current_year = date("Y");
$current_time = date("H:i");

if (isset($_POST['submit'])) {

    global $con;
    $helper = new helpers();
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $timestamp = strtotime($current_month . " " . $current_date . " " . $current_year . " " . $current_time);

    if (!get_magic_quotes_gpc()) {
        $email = addslashes($email);
        $nome = addslashes($nome);
        $sobrenome = addslashes($sobrenome);
    }


    $ip = $helper->getIP();
    $sql = "INSERT INTO leads (nome, sobrenome, email, ip, timestamp) VALUES ('$nome', '$sobrenome', '$email', '$ip', '$timestamp')";
    $result = mysqli_query($con, $sql) or print("Can't insert into table php_blog.<br />" . $sql . "<br />" . mysql_error());
}

?>

<html lang="en">

<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Conteúdo Trade</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

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

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/home2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <img src="../img/group.png"/>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="single-section-heading">Aprenda a diferença entre Shopper e Consumidor </h1>

                <h6>Por que a diferença é tão importante para as técnicas de varejo da atualidade!</h6>
				<br>
                <hr>

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


         <!--       <div class="ebook_box">
                    <div class="row">
                        <div class="col-6">
                            <div class="bb_c1">
                                <p class="ebook_text2"> Baixe nosso ebook PLEASE: </p>

                                <p class="ebook_title"> “Ferramentas digitais para Trade Marketing” </p>

                                <p class="ebook_text"> Loren loren loren loren loren loren loren loren loren loren
                                    loren loren loren loren loren loren loren loren loren loren loren loren loren
                                    loren </p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="bb_c2">
                                <form id="contact2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <p class="ebook_text"> Receba nosso Ebook direto no seu e-mail </p>
                                    <fieldset>
                                        <label class="label2"> Nome completo: </label>
                                        <input placeholder="Nome" type="text" tabindex="1" name="nome" required
                                            >
                                    </fieldset>
                                    <fieldset>
                                        <input placeholder="Sobrenome" type="text" tabindex="2" name="sobrenome"
                                               required>
                                    </fieldset>
                                    <fieldset>
                                        <label class="label2"> Email profissional: </label>
                                        <input placeholder="Email" type="email" tabindex="3" name="email" required>
                                    </fieldset>
                                    <fieldset>
                                        <button name="submit" type="submit" id="submit">Quero Receber</button>
                                    </fieldset>
                                    </p>
                                </form>
                            </div>
                        </div>

                    </div>
                </div> -->
            
			</div>


            <div class="col-md-4">
				<form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<p class="news_t1">Trade Marketing</p>

					<p class="news_t2">Newsletter</p>

					<p class="news_call">Quer aprender mais sobre vendas e Trade Marketing? Se inscreva na nossa newsletter semanal e saia na frente com conteúdo exclusivo e selecionado! </p>
					<fieldset>
						<label> Nome completo: </label>
						<input placeholder="Nome" type="text" tabindex="1" name="nome" required>
					</fieldset>
					<fieldset>
						<input placeholder="Sobrenome" type="text" tabindex="2" name="sobrenome" required>
					</fieldset>
					<fieldset>
						<label> Email profissional: </label>
						<input placeholder="seumelhor@email.com.br" type="email" tabindex="3" name="email" required>
					</fieldset>
					<fieldset>
                    <button name="submit" type="submit" id="submit">Quero Receber</button>
					</fieldset>
					</p>
				</form>
			</div>
        </div>


    </div>
</article>

<hr>
<footer>
    <div class="container text-center">
        <a href="https://www.facebook.com/Trade-Marketing-1943128225911886/">
          <span class="fa-stack fa-lg face-icon">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <p class="copyright text-muted">Copyright &copy; Conteúdo Trade 2017</p>
    </div>
</footer>

</body>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/clean-blog.min.js"></script>

</html>

<?php
//include('db.php');
//
//global $con;
//
//if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
//    die("Invalid ID specified.");
//}
//
//$id = (int)$_GET['id'];
//$sql = "SELECT * FROM php_blog WHERE id='$id' LIMIT 1";
//
//$result = mysqli_query($con, $sql) or print ("Can't select entry from table php_blog.<br />" . $sql . "<br />" . mysql_error());
//
//while ($row = mysqli_fetch_array($result)) {
//    $date = date("l F d Y", $row['timestamp']);
//    $title = stripslashes($row['title']);
//    $entry = stripslashes($row['entry']);
//
//
?>
<!---->
<!--    <p><strong>--><?php //echo $title; ?><!--</strong><br/><br/>-->
<!--        --><?php //echo $entry; ?><!--<br/><br/>-->
<!--        Posted on --><?php //echo $date; ?>
<!---->
<!--    </p>-->
<!---->
<?php
//}
//
//$sql_prev = "SELECT * FROM php_blog WHERE id < '$id' ORDER BY id DESC LIMIT 1";
//$result_prev = mysqli_query($con, $sql_prev) or print ("Can't select previous entry id table php_blog.<br />" . $sql_prev . "<br />" . mysql_error());
//$sql_next = "SELECT * FROM php_blog WHERE id > '$id' ORDER BY id LIMIT 1";
//$result_next = mysqli_query($con, $sql_next) or print ("Can't select next entry id table php_blog.<br />" . $sql_next . "<br />" . mysql_error());
//
//while ($row = mysqli_fetch_array($result_next)) {
//    $next = $row['id'];
//    $next_title = $row['title'];
//}
//
//while ($row = mysqli_fetch_array($result_prev)) {
//    $prev = $row['id'];
//    $prev_title = $row['title'];
//}
//
//if (isset($prev) && isset($prev_title)) {
//    // print a previous link
//    printf("<a href=\"single_post.php?id=%s\">Post anterior</a>", $prev);
//    echo "<br>";
//}
//
//if (isset($next)) {
//    // print a next link
//    printf("<a href=\"single_post.php?id=%s\">Próximo post</a>", $next);
//}

?>



