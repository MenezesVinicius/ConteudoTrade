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
    $result = mysqli_query($con, $sql) or print("Can't insert.<br />" . $sql . "<br />" . mysql_error());

    //get a unique download key
    $strKey = $helper->createKey();
    $sql = "INSERT INTO downloads (downloadkey, file, expires) VALUES ('$strKey', 'Ebook_1.pdf', '" . (time() + (60 * 60 * 24 * 7)) . "')";
    //insert the download record into the database
    $result = mysqli_query($con, $sql) or print("Can't insert .<br />" . $sql . "<br />" . mysql_error());

    // send the email

//    // Inclui o arquivo class.phpmailer.php localizado na pasta class
//    require_once("class/class.phpmailer.php");
//
//    // Inicia a classe PHPMailer
//    $mail = new PHPMailer(true);
//    // Define os dados do servidor e tipo de conexão
//    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//    $mail->IsSMTP(); // Define que a mensagem será SMTP
//
//    try {
//        $mail->Host = 'smtp.umbler.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
//        $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
//        $mail->Port = 587; //  Usar 587 porta SMTP
//        $mail->Username = 'anderson@conteudotrade.com'; // Usuário do servidor SMTP (endereço de email)
//        $mail->Password = 'gamagama'; // Senha do servidor SMTP (senha do email usado)
//
//        //Define o remetente
//        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//        $mail->SetFrom('anderson@conteudotrade.com', 'Conteúdo Trade'); //Seu e-mail
//        $mail->AddReplyTo('anderson@conteudotrade.com', 'Conteúdo Trade'); //Seu e-mail
//        $mail->Subject = 'Download E-book'; //Assunto do e-mail
//
//
//        //Define os destinatário(s)
//        //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//        $mail->AddAddress($email, 'Teste Contéudo Trade');
//
//        $link = '<a href=http://conteudotrade.com/pages/download.php?key=' . $strKey . '>Baixar E-book</a>';
//
//        $message = 'Olá, clique no seguinte link para realizar o download do nosso E-book: ' . $link . '<br><br>Obrigado!';
//
//        //Define o corpo do email
//        $mail->MsgHTML($message);
//
//        ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
//        //$mail->MsgHTML(file_get_contents('arquivo.html'));
//
//        $mail->Send();
//        //caso apresente algum erro é apresentado abaixo com essa exceção.
//    } catch (phpmailerException $e) {
//        echo "error email";
//        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
//    }

    $to = $email;
    $subject = "HTML email";

    $message = "
                <html>
                <head>
                <title>HTML email</title>
                </head>
                <body>
                <p>This email contains HTML Tags!</p>
                <table>
                <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                </tr>
                <tr>
                <td>John</td>
                <td>Doe</td>
                </tr>
                </table>
                </body>
                </html>
                ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <anderson@conteudotrade.com>' . "\r\n";

    mail($to, $subject, $message, $headers);


    echo "<script>
             $('#thankyouModal').modal('show');
          </script>";
}



