<?php
include('src/db.php');
include('src/helpers.php');

global $con;
$helper = new helpers();
$blog_postnumber = 2;

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = (int)$_GET['page'];
}
$from = (($page * $blog_postnumber) - $blog_postnumber);

$sql = "SELECT * FROM php_blog ORDER BY timestamp DESC LIMIT $from, $blog_postnumber";

$result = mysqli_query($con, $sql) or print ("Can't select entries from table php_blog.<br />" . $sql . "<br />" . mysql_error());

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $date = date("d F Y", $row['timestamp']);
    $title = stripslashes($row['title']);
    $entry = stripslashes($row['entry']);

    if (strlen($entry) > 90) {
        $entry = substr($entry, 0, 400);
        $entry = "$entry... <br/><br /><a href=\"src/single_post.php?id=" . $id . "\">Leia mais</a>";
    }

    ?>

    <p><strong><?php printf("<a href=\"src/single_post.php?id=%s\">$title</a>", $id); ?></strong><br/><br/>
        <?php echo $entry; ?><br/><br/>
        Postado em <?php echo $date; ?>

    <hr/></p>

<?php
}

$total_results = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) as num FROM php_blog"));
$total_pages = ceil($total_results['num'] / $blog_postnumber);
if ($page > 1) {
    $prev = ($page - 1);
    echo "<a href=\"index.php?page=$prev\">&lt;&lt;  Newer</a> ";
}
for ($i = 1; $i <= $total_pages; $i++) {
    if ($page == $i) {
        echo "$i ";
    } else {
        echo "<a href=\"index.php?page=$i\">$i</a> ";
    }
}
if ($page < $total_pages) {
    $next = ($page + 1);
    echo "<a href=\"index.php?page=$next\">Older &gt;&gt;</a>";
}

$sql = "SELECT * FROM leads";
$result = mysqli_query($con, $sql) or print("Can't get ip.<br />" . $sql . "<br />" . mysql_error());
while ($row = mysqli_fetch_array($result)) {
    echo $row['id'];
}

?>
