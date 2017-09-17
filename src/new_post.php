<?php

include 'db.php';
include 'helpers.php';

if (isset($_POST['submit'])) {

    global $con;
    $helper = new helpers();

    $month = htmlspecialchars(strip_tags($_POST['month']));
    $date = htmlspecialchars(strip_tags($_POST['date']));
    $year = htmlspecialchars(strip_tags($_POST['year']));
    $time = htmlspecialchars(strip_tags($_POST['time']));
    $title = htmlspecialchars(strip_tags($_POST['title']));
    $entry = $_POST['entry'];

    $timestamp = strtotime($month . " " . $date . " " . $year . " " . $time);

//    $entry = nl2br($entry);

    if (!get_magic_quotes_gpc()) {
        $title = addslashes($title);
        $entry = addslashes($entry);
    }

    $sql = "INSERT INTO php_blog (timestamp, title, entry) VALUES ('$timestamp','$title','$entry')";

    $result = mysqli_query($con, $sql) or print("Can't insert into table php_blog.<br />" . $sql . "<br />" . mysql_error());

    if ($result != false) {
        print "Your entry has successfully been entered into the database.";
        $ip = $helper->getIP();
        $sql = "INSERT INTO leads (name, email, ip, timestamp) VALUES ('Tester', 'test@test.com', '$ip', '$timestamp')";
        $result = mysqli_query($con, $sql) or print("Can't insert into table php_blog.<br />" . $sql . "<br />" . mysql_error());
    }

    mysqli_close($con);
}
?>

<?php
$current_month = date("F");
$current_date = date("d");
$current_year = date("Y");
$current_time = date("H:i");
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <p><strong><label for="month">Date (month, day, year):</label></strong>

        <select name="month" id="month">

            <option value="<?php echo $current_month; ?>"><?php echo $current_month; ?></option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>

            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>

            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>

            <option value="December">December</option>
        </select>

        <input type="text" name="date" id="date" size="2" value="<?php echo $current_date; ?>"/>

        <select name="year" id="year">
            <option value="<?php echo $current_year; ?>"><?php echo $current_year; ?></option>
            <option value="2004">2004</option>

            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>

            <option value="2009">2009</option>
            <option value="2010">2010</option>
        </select>

        <strong><label for="time">Time:</label></strong> <input type="text" name="time" id="time" size="5"
                                                                value="<?php echo $current_time; ?>"/></p>

    <p><strong><label for="title">Title:</label></strong> <input type="text" name="title" name="title" size="40"/></p>

    <p><textarea cols="80" rows="20" name="entry" id="entry"></textarea></p>

    <p><input type="submit" name="submit" id="submit" value="Submit"></p>

</form>