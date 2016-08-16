<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS_WP_Courses | Main</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
    <!--<script src="../js/testScript.js"></script>-->
    <!--<script src="../js/bootstrap.min.js"></script>-->
</head>
<body>
    <?php include("header.php");?>
    <main class="main_page">
        <article class=" post contact_form">
            <div class="post_content">
                <?php
                    $name = trim($_REQUEST['input_name']);
                    $email = trim($_REQUEST['input_email']);
                    $facebook = trim($_REQUEST['input_facebook']);
                    $subject = trim($_REQUEST['input_subject']);
                    $message = trim($_REQUEST['input_message']);
                    $nameDuble = $name;

            //        if (mb_strtoupper(substr($name, 0, 1), 'utf-8') != substr($name, 0, 1)) {
            //            $name = mb_strtoupper(substr($name, 0, 1), 'utf-8') . substr($name, 1);
            //        }

                    if (strpos($facebook, 'facebook.com') === false) {
                        $facebook = 'http://facebook.com/'.$facebook;
                    }

                    if (strlen($name) == 0) $name = 'Вы не ввели имя';

                    $facebookEmpty = '';
                    if ($facebook === 'http://facebook.com/') $facebookEmpty = ': Вы не ввели адрес страницы';
                ?>
                <p>
                    Введенные Вами данные: <br><br>
                    Ваше имя: <span class="user_data"> <?php echo $name?> </span> <br>
                    Ваш email: <span class="user_data"><a href="mailto:<?php echo $email?>?subject=<?php echo $subject?>;body=<?php echo $message?>">
                        <?php echo $email?></a> </span> <br>
                    Ваша страница в <span class="user_data"><a href="<?php echo $facebook?>" target="_blank">
                        Facebook<?php echo $facebookEmpty ?></a> </span><br>
                </p>
            </div>
        </article>
        <article class=" post contact_form">
            <h1 class="post_header contact_header">
                Contact Us
            </h1>
            <div class="post_content">
                    <p>
                        Заполните все поля и нажмите на кнопку. <br>
                        Вы увидете подтверждение Вашего воода.<br>
                        Вы тут же сможете воойти на свою страницу в Facebook,
                        даже если введете только идентификатор без домена facebook.com <br>
                        И отправить письмо на свой email с готовой темой и сообщением введенными в форме<br>
                        Удачи!
                    </p>
                <form class="contact_form clearfix top_line" id="contact_form" action="getFormInfo.php" method="get">
                    <fieldset>
                        <!--<label for="input_name">Your Name</label>-->
                        <input type="text" name="input_name" id="input_name" class="input_name" placeholder="Your Name">
                        <!--<label for="input_email">Your Email</label>-->
                        <input type="email" name="input_email" id="input_email" class="input_email" placeholder="Email">
                        <input type="text" name="input_facebook" id="input_facebook" class="input_facebook" placeholder="Facebook">

                        <!--<label for="input_subject">Subject of Your Message</label>-->
                        <input type="text" name="input_subject" id="input_subject" class="input_subject" placeholder="Subject">
                        <!--<label for="input_message">Enter your message/label>-->
                        <textarea name="input_message" id="input_message"
                                  class="input_message" cols="30" rows="10" placeholder="Your Message"></textarea>
                    </fieldset>
                    <fieldset>
                        <button form="contact_form" class="button" type="submit">Send Message</button>
                        <button form="contact_form" class="button" type="reset">Reset</button>
                    </fieldset>
                </form>
            </div>
        </article>
    </main>
    <?php include("footer.php"); ?>
</body>
</html>