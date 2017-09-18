<?php
include('src/db.php');
include('src/helpers.php');

global $con;
$helper = new helpers();
$blog_postnumber = 5;

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = (int)$_GET['page'];
}
$from = (($page * $blog_postnumber) - $blog_postnumber);

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
<?php
//$total_results = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as num FROM php_blog"));
//$total_pages = ceil($total_results['num'] / $blog_postnumber);
//if ($page > 1) {
//    $prev = ($page - 1);
//    echo "<a href=\"index.php?page=$prev\">&lt;&lt;  Newer</a> ";
//}
//for ($i = 1; $i <= $total_pages; $i++) {
//    if ($page == $i) {
//        echo "$i ";
//    } else {
//        echo "<a href=\"index.php?page=$i\">$i</a> ";
//    }
//}
//if ($page < $total_pages) {
//    $next = ($page + 1);
//    echo "<a href=\"index.php?page=$next\">Older &gt;&gt;</a>";
//}
//
//$sql = "SELECT * FROM leads";
//$result = mysqli_query($con, $sql) or print("Can't get ip.<br />" . $sql . "<br />" . mysql_error());
//while ($row = mysqli_fetch_array($result)) {
//    echo $row['id'];
//}
//
//
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conteúdo Trade</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

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

<!-- Navigation 
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a> 
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="src/about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>-->

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <img src="img/group.png"/>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Area -->

<div class="container">
    <div class="row">
        <div class="col-md-8">
			<div class="row">
				<div class="col-md-3">
					<img width="160" height="106" src="img/post_1.jpg" class="img-responsive img-box img-thumbnail">
				</div>
				<div class="col-md-9">
            <h2 class="section-heading"><a href="src/single_post.php">Aprenda a diferença entre Shopper e Consumidor</a>
            </h2>

            <h6>Por que a diferença é tão importante para as técnicas de varejo da atualidade!</h6>
            <hr>
			</div>
			</div>
			
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
                    <input placeholder="Email" type="email" tabindex="3" name="email" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="submit">Quero Receber</button>
                </fieldset>
                </p>
            </form>
        </div>
    </div>
    <!--    <div class="row">-->
    <!--        <div class="span8">-->
    <!--            <p></p>-->
    <!--            <p>-->
    <!--                <i class="icon-user"></i> by <a href="#">John</a>-->
    <!--                | <i class="icon-calendar"></i> Sept 16th, 2012-->
    <!--                | <i class="icon-comment"></i> <a href="#">3 Comments</a>-->
    <!--                | <i class="icon-share"></i> <a href="#">39 Shares</a>-->
    <!--                | <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a>-->
    <!--                <a href="#"><span class="label label-info">Bootstrap</span></a>-->
    <!--                <a href="#"><span class="label label-info">UI</span></a>-->
    <!--                <a href="#"><span class="label label-info">growth</span></a>-->
    <!--            </p>-->
    <!--        </div>-->
    <!--    </div>-->
</div>
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>


</html>



