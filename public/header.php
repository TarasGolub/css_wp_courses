<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS_WP_Courses | Main</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
<!--    <link rel="stylesheet" href="css/main_addaptive.css">-->
    <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
    <!--<script src="../js/testScript.js"></script>-->
    <!--<script src="../js/bootstrap.min.js"></script>-->
</head>
<body>


<header class="header container">
    <div class="logo header_logo">
        <a href="index.php" >Palo Alto</a>
    </div>

    <nav class="menu header_menu">
        <a class="menu header_menu_item" href="index.php">Home</a>
        <a class="menu header_menu_item" href="about.php">About</a>
        <a class="menu header_menu_item" href="archive.php">Archive</a>
        <a class="menu header_menu_item" href="contacts.php">Contact</a>
    </nav>

    <div class="burger_container">
        <input type="checkbox" id="menu_trigger" class="checkbox_trigger">
        <label  for="menu_trigger" class="label_trigger">
            <span class="burger_first"></span>
            <span class="burger_second"></span>
            <span class="burger_third"></span>
        </label>
        <div class="dark"></div>
        <div class="burger_menu">
            <ul class="burger_nav">
                <li class="burger_nav-item"><a href="index.php">Home</a></li>
                <li class="burger_nav-item"><a href="about.php">About</a></li>
                <li class="burger_nav-item"><a href="archive.php">Archive</a></li>
                <li class="burger_nav-item"><a href="contacts.php">Contact</a></li>
            </ul>
        </div>
    </div>

</header>

