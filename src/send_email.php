<?php
include('db.php');
include('helpers.php');

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

    //get a unique download key
    $strKey = $helper->createKey();
    $sql = "INSERT INTO downloads (downloadkey, file, expires) VALUES ('$strKey', 'ebook.pdf', '".(time()+(60*60*24*7))."')";
    //insert the download record into the database
    $result = mysqli_query($con, $sql) or print("Can't insert into table downloads.<br />" . $sql . "<br />" . mysql_error());


    echo "<script>
             $('#thankyouModal').modal('show');
          </script>";
}



