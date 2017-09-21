<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conteúdo Trade</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="../vendor/jquery/jquery.js"></script>
    <!-- Custom styles for this template -->
    <link href="../css/blog-home.css" rel="stylesheet">
    <script src="../js/helpers.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
          content="909023185464-gp7mqrd32ol2hai3o6jube9p8m771t6l.apps.googleusercontent.com">

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

    <!-- Facebook Pixel Code -->

    <script>

        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?

                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };

            if (!f._fbq)f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';

            n.queue = [];
            t = b.createElement(e);
            t.async = !0;

            t.src = v;
            s = b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',

                'https://connect.facebook.net/en_US/fbevents.js');


        fbq('init', '1730534133916400');

        fbq('track', 'PageView');


        fbq('track', 'Lead');


        fbq('track', 'CompleteRegistration');

    </script>

    <!-- Hotjar Tracking Code for conteudotrade.com -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 630444, hjsv: 5};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <noscript>

        <img height="1" width="1"

             src="https://www.facebook.com/tr?id=1730534133916400&ev=PageView

        &noscript=1"/>

    </noscript>

    <!-- End Facebook Pixel Code -->

</head>
<body class="main-area">
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '179876649248623',
            cookie: true,
            xfbml: true,
            version: 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    logInWithFacebook = function () {
        FB.login(function (response) {
            if (response.authResponse) {
                testAPI();

            } else {
                alert('User cancelled login or did not fully authorize.');
            }
        });
        return false;
    };

    function testAPI() {

        FB.api('/me', {fields: 'name, email'}, function (response) {
            $.ajax({ url: "<?php echo $_SERVER['PHP_SELF']; ?>",
                data: {submit: 'login', nome: response.name, email: response.email},
                type: 'post',
                success: function (output) {
                    $('#thankyouModal').modal('show');
                },
                error: function (errpr) {
                    $('#errorModal').modal('show');
                }

            });
        });
    }

    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        $.ajax({ url: "<?php echo $_SERVER['PHP_SELF']; ?>",
            data: {submit: 'login', nome: profile.getName(), email: profile.getEmail()},
            type: 'post',
            success: function (output) {
                $('#thankyouModal').modal('show');
            },
            error: function (errpr) {
                $('#errorModal').modal('show');
            }

        });
    }

</script>


<div class="container eltopo">
    <div class="elbg">
        <div class="row">
            <div class="col-md-6">

                <img class="img-fluid" src="../img/10_ferramentas_para.jpg"/>

            </div>

            <div class="col-md-6">

                <div class="right_side">
                    <div class="">
                        <div class="line1">
                            Conheça “10 ferramentas de automação e gestão de vendas” que vão te ajudar a virar o jogo!
                        </div>

                        <div class="line2">
                            Fizemos esse ebook gratuito pra te mostrar 10 ferramentas que você precisa conhecer para
                            fechar mais vendas!
                        </div>

                        <div class="text-center newsletter card-header">
                            <p class="news_t1">Baixe utilizando o Facebook:</p>
                        </div>

                        <div class="fb-login-button fb-login-custom text-center" data-max-rows="1" data-size="large"
                             data-button-type="continue_with" data-show-faces="false"
                             data-auto-logout-link="false" data-use-continue-as="true"
                             data-scope="public_profile, email" onlogin="logInWithFacebook()"></div>

                        <div class="text-center newsletter card-header">
                            <p class="news_t1">Baixe utilizando o Google:</p>
                        </div>

                        <div class="text-center">
                            <div class="g-signin2 align-content-center" data-width="240" data-height="40" data-longtitle="true"
                                 data-onsuccess="onSignIn"></div>
                        </div>

                        <div class="text-center newsletter card-header">
                            <p class="news_t1">Ou preencha para baixar o ebook:</p>
                        </div>

                        <div class="container">
                            <div class="card-body card-form">


                                <form id="contact" method="post" onsubmit="return validate()"
                                      action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <fieldset>
                                        <label> Nome completo: </label>
                                        <input placeholder="Seu Nome Completo" type="text" tabindex="1" name="nome"
                                               id="nome_form"
                                               required>
                                    </fieldset>

                                    <div class="alert alert-danger" role="alert" id="alert_nome" style="display: none">
                                        Nome Completo inválido!
                                    </div>

                                    <fieldset>
                                        <label> Email profissional: </label>
                                        <input placeholder="seu@email.com.br" type="email" tabindex="3" name="email"
                                               required>
                                    </fieldset>

                                    <fieldset>
                                        <button name="submit" type="submit" id="submit">Fazer Download</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Sucesso!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Seu ebook foi enviado para o seu email! Aproveite a leitura!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Erro!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Erro ao tentar enviar e-mail! Por favor, tente novamente.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>

</div>
</div>


<footer>
    <div class="container text-center">
        <a href="https://www.facebook.com/Trade-Marketing-1943128225911886/">
          <span class="fa-stack fa-lg face-icon">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>

        <p class="copyright2">Copyright &copy; Conteúdo Trade 2017</p>
    </div>
</footer>

</body>
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/popper/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</html>

<?php
include('../src/db.php');
include('../src/helpers.php');
use PHPMailer\PHPMailer\PHPMailer;

require '../src/class/PHPMailer.php';
require '../src/class/SMTP.php';

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

    // Inicia a classe PHPMailer
    $mail = new PHPMailer(true);
    // Define os dados do servidor e tipo de conexão
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP

    try {
        $mail->Host = 'smtp.umbler.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
        $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        $mail->Port = 587; //  Usar 587 porta SMTP
        $mail->Username = 'anderson@conteudotrade.com'; // Usuário do servidor SMTP (endereço de email)
        $mail->Password = 'gamagama'; // Senha do servidor SMTP (senha do email usado)

        //Define o remetente
        // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->setFrom('anderson@conteudotrade.com', 'Anderson da Conteúdo Trade'); //Seu e-mail
        $mail->AddReplyTo('anderson@conteudotrade.com', 'Conteúdo Trade'); //Seu e-mail
        $mail->Subject = 'Seu ebook "10 Ferramentas de automação e gestão de vendas"'; //Assunto do e-mail
        $mail->CharSet = 'UTF-8';

        //Define os destinatário(s)
        //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
        $mail->AddAddress($email, '');

        $link = '<a href=http://conteudotrade.com/pages/download.php?key=' . $strKey . '>Baixar E-book</a>';

        $message = 'Oi ' . $nome . ', tudo bem?'
            . '<br><br>Estamos te enviando esse email pois você se registrou lá no Conteúdo Trade para receber o ebook "10 Ferramentas de automação e gestão de vendas".<br><br>
                    Clique no seguinte link para realizar o download do nosso ebook: ' . $link . '<br>
                    Ou copie e cole no seu navegador: http://conteudotrade.com/pages/download.php?key=' . $strKey . '<br>
                    Esse link é exlusivo para você utilizar uma vez. <br><br> Qualquer dúvida ou problema, pode responder através desse email.<br><br>
                    Anderson <br> Conteúdo Trade';

        //Define o corpo do email
        $mail->MsgHTML($message);

        ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
        //$mail->MsgHTML(file_get_contents('arquivo.html'));

        $mail->Send();
        //caso apresente algum erro é apresentado abaixo com essa exceção.

        echo "<script>
             $('#thankyouModal').modal('show');
          </script>";

    } catch (phpmailerException $e) {
        echo "<script>
                $('#errorModal').modal('show');
             </script>";
    }
}
