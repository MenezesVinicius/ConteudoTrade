<?php
include('db.php');

global $con;

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid ID specified.");
}

$id = (int)$_GET['id'];
$sql = "SELECT * FROM php_blog WHERE id='$id' LIMIT 1";

$result = mysqli_query($con, $sql) or print ("Can't select entry from table php_blog.<br />" . $sql . "<br />" . mysql_error());

while ($row = mysqli_fetch_array($result)) {
    $date = date("l F d Y", $row['timestamp']);
    $title = stripslashes($row['title']);
    $entry = stripslashes($row['entry']);

    ?>

    <p><strong><?php echo $title; ?></strong><br/><br/>
        <?php echo $entry; ?><br/><br/>
        Posted on <?php echo $date; ?>

    </p>

<?php
}

$sql_prev = "SELECT * FROM php_blog WHERE id < '$id' ORDER BY id DESC LIMIT 1";
$result_prev = mysqli_query($con, $sql_prev) or print ("Can't select previous entry id table php_blog.<br />" . $sql_prev . "<br />" . mysql_error());
$sql_next = "SELECT * FROM php_blog WHERE id > '$id' ORDER BY id LIMIT 1";
$result_next = mysqli_query ($con, $sql_next) or print ("Can't select next entry id table php_blog.<br />" . $sql_next . "<br />" . mysql_error());

while ($row = mysqli_fetch_array($result_next)) {
    $next = $row['id'];
    $next_title = $row['title'];
}

while ($row = mysqli_fetch_array($result_prev)) {
    $prev = $row['id'];
    $prev_title = $row['title'];
}

if (isset($prev) && isset($prev_title)) {
    // print a previous link
    printf("<a href=\"single_post.php?id=%s\">Post anterior</a>", $prev);
    echo "<br>";
}

if (isset($next)) {
    // print a next link
    printf("<a href=\"single_post.php?id=%s\">Próximo post</a>", $next);
}

?>