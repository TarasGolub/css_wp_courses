<head xmlns="http://www.w3.org/1999/html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSS_WP_Courses | Main</title>
    <link rel="stylesheet" href="public/css/nprogress.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/grid.css">
    <link rel="stylesheet" href="public/css/main.css">
    <!--    <link rel="stylesheet" href="css/main_addaptive.css">-->
    <!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
    <!--<script src="../js/testScript.js"></script>-->
    <!--<script src="../js/bootstrap.min.js"></script>-->

</head>
<body>
<div class="container main_container">
    <input type="checkbox" id="menu_trigger" class="checkbox_trigger"
           onchange='hideFoot("menu_trigger", "page_footer" )'>
    <label  for="menu_trigger" class="label_trigger hide-l hide-xl">
        <span class="drop_first"></span>
        <span class="drop_second"></span>
        <span class="drop_third"></span>
    </label>
    <div class="dark hide-l hide-xl"></div>

    <div class="drop_menu hide-l hide-xl">
        <ul class="drop_nav">
            <li>
                <div class="search_form_drop_nav drop_nav-item">
                    <form action="#" id="search_form_drop_nav">
                        <input type="text" placeholder="SEARCH" >
                        <button type="submit" form="search_form_drop_nav">&#128269;</button>
                    </form>
                </div>
            </li>
            <li class="drop_nav-item"><a href="index.php">Home</a></li>
            <li class="drop_nav-item"><a href="about.php">About</a></li>
            <li class="drop_nav-item"><a href="archive.php">Archive</a></li>
            <li class="drop_nav-item"><a href="contacts.php">Contact</a></li>
        </ul>
        <div class="drop_nav_footer">
            <div class="logo drop_nav_logo">
                <a href="index.php" >Palo Alto</a>
            </div>
            <div class="drop_nav_rights_reserved">
                <p>
                    Designed & Developed by <br>
                    <a href="http://example.com/" target="_blank">Pixel Buddha Team</a>
                </p>
            </div>
        </div>
    </div>

    <div class="all_page_wrap">
        <header class="header">
            <div class="logo header_logo">
                <a href="index.php" >Palo Alto</a>
            </div>

            <div class="menu header_menu hide-xs hide-s hide-m ">
                <nav>
                    <div class="menu header_menu_item">
                        <a href="index.php">Home</a>
                    </div>
                    <div class="menu header_menu_item">
                        <a href="about.php">About</a>
                    </div>
                    <div class="menu header_menu_item">
                        <a href="archive.php">Archive</a>
                    </div>
                    <div class="menu header_menu_item">
                        <a href="contacts.php">Contact</a>
                    </div>
                    <div class="menu header_menu_item search_icon_header ~inactive_search">
                        <a href="search.php"><span class="search_icon">&#128269;</span></a>
                    </div>
                </nav>
            </div>
        </header>
