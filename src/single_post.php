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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="section-heading">The Final Frontier</h2>
                <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it
                    is a task to occupy the generations. And no matter how much progress one makes, there is always the
                    thrill of just beginning.</p>

                <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it
                    is a task to occupy the generations. And no matter how much progress one makes, there is always the
                    thrill of just beginning.</p>

                <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of
                    tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far
                    too little for the next ten.
                </blockquote>

                <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a
                    historical process which mankind is carrying out in accordance with the natural laws of human
                    development.</p>

                <h2 class="section-heading">Reaching for the Stars</h2>

                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size
                    of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so
                    fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing
                    this has to change a man.</p>

                <a href="#">
                    <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
                </a>
                <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

                <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission:
                    to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man
                    has gone before.</p>

                <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental
                    truth to our nature, Man must explore, and this is exploration at its greatest.</p>

                <p>Placeholder text by
                    <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
                    <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
            </div>
        </div>
    </div>
</article>
</body>

</html>

<?php
include('db.php');

global $con;

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid ID specified.");
}
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
//    ?>
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



