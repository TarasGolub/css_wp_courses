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

    <?php include("header.php"); ?>

    <div class=" post contact_form">
        <h1>
            Contact Us
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam architecto
            atque, cumqueqwefd deserunt dignissimos distinctio dolore doloremquesdsdsdsd eligendi illo, ipsam iusto nostrum
            optio, provident tempora ullam voluptatem. Enim, iusto!
        </p>
        <!--here will be searching form-->


    <form class="contact_form clearfix" id="contact_form" action="#" method="get">
            <!--<label for="input_name">Your Name</label>-->
            <input type="text" name="input_name" id="input_name" class="input_name" placeholder="Your Name">
            <!--<label for="input_email">Your Email</label>-->
            <input type="email" name="input_email" id="input_email" class="input_email" placeholder="Email">
            <!--<label for="input_subject">Subject of Your Message</label>-->
            <input type="text" name="input_subject" id="input_subject" class="input_subject" placeholder="Subject">
            <!--<label for="input_message">Enter your message/label>-->
            <textarea name="input_message" id="input_message"
                      class="input_message" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button form="contact_form" class="button" type="submit">Send Message</button>

        </form>
    </div>

    <?php include("footer.php"); ?>

</body>
</html>