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
    <meta name="description" content="">
    <meta name="author" content="">

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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="src/about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
        <div class="col-8">
            <?php
            $sql = "SELECT * FROM php_blog ORDER BY timestamp DESC LIMIT $from, $blog_postnumber";

            $result = mysqli_query($con, $sql) or print ("Can't select entries from table php_blog.<br />" . $sql . "<br />" . mysql_error());

            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $date = date("d F Y", $row['timestamp']);
                $title = stripslashes($row['title']);
                $entry = stripslashes($row['entry']);
                ?>

                <div class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <img
                                src="http://wanderluxe.theluxenomad.com/wp-content/uploads/2014/10/http-www.urchinbali.comgallery.jpg"
                                class="img-responsive img-box img-thumbnail">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <?php

                        if (strlen($entry) > 90) {
                            $entry = substr($entry, 0, 400);
                            $entry = "$entry... <br/><br/><a class='btn btn-success' href=\"src/single_post.php?id=" . $id .
                                "\">Leia mais</a>";
                        }

                        ?>

                        <?php printf("<h4><a href=\"src/single_post.php?id=%s\">$title</a></h4>", $id); ?>
                        <?php echo "<p>$entry</p>"; ?>
                        <!--                        Postado em --><?php //echo $date; ?>

                        <hr/>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <div class="col-md-4">
            <form id="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h3 class="news_t1">Trade Marketing</h3>

                <h3 class="news_t2">Newsletter</h3>
                <fieldset>
                    <input placeholder="Nome" type="text" tabindex="1" name="nome" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Sobrenome" type="text" tabindex="2" name="sobrenome" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Email" type="email" tabindex="3" name="email" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="submit">Submit</button>
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


</body>
</html>




