<html lang="en">
<head>
    
    <title>
        
        The Millenium <?php 
                            if ($section == 'Band' and $pageTitle != "TheMillenium"){ 
                                
                                echo "| " . $pageTitle ;
                                
                                } else if ($section == 'Band' and $pageTitle == "TheMillenium") { 
                                
                                echo "| Stay Golden" ;}?>
        
                            <?php if ($section != 'Band' and $section != 'Landing'){ 
                                
                                echo "| " . $section;
                                
                                } else if ($section != 'Band' and $section == 'Landing') { 
                                
                                echo "| Stay Golden" ;
                                
                            }?>
    </title>
    
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700|Open+Sans:300italic,400italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="fav/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="fav/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="fav/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="fav/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="fav/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16.png">
    <link rel="apple-touch-icon" href="fav/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="fav/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="fav/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="fav/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="fav/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="fav/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="fav/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="fav/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="fav/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="fav/favicon-144.png">
    <meta name="msapplication-config" content="fav/browserconfig.xml">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../final_beta/js/main-nav.js"></script>
</head>
<body <?php if ($section == "Landing") { echo 'class="landing"'; } ?>>

	<header <?php if ($section == "Landing") { echo 'class="landing"'; } ?>>

		<div class="logo-wrapper">

            <a href="<?php if ($section == 'Landing'){ echo 'authors.php' ;} else { echo './' ;}?>" id="logo<?php if ($section == "Landing") { echo "landing"; } ?>">
			    <img name="top" src="img/TheMilleniumBoxLogo.png" alt="The Millenium"><?php if ($section == "Landing") { echo '<div class="enter">ENTER</div>' ; } ?>
		    </a>

		</div>
        
    

    <nav id="MainNav"<?php if ($section == "Landing") { echo 'class="landing"'; } ?> class="scroll">

        <a href="authors.php" <?php if ($section == "Band") { echo "class='selected'"; } ?>>About</a>

        <a href="music.php" <?php if ($section == "Music") { echo "class='selected'"; } ?>>Music</a>

        <a href="video.php" <?php if ($section == "Video") { echo "class='selected'"; } ?>>Video</a> 

        <a href="shop.php" <?php if ($section == "Shop") { echo "class='selected'"; } ?>>Shop</a>
        
        <a href="contact.php" <?php if ($section == "Contact") { echo "class='selected'"; } ?>>Contact</a>


    </nav><!-- #MainNav -->
    
    <nav id="MobileNav"<?php if ($section == "Landing") { echo 'class="landing"'; } ?> class="scroll">

        <ul>

            <li id="hamburger"><a id="patty" href="#">Menu</a>

                <ul>

                    <li><a href="authors.php" <?php if ($section == "Band") { echo "class='selected'"; } ?>>About</a></li>

                    <li><a href="music.php" <?php if ($section == "Music") { echo "class='selected'"; } ?>>Music</a></li>

                    <li><a href="video.php" <?php if ($section == "Video") { echo "class='selected'"; } ?>>Video</a></li> 
                    
                    <li><a href="shop.php" <?php if ($section == "Shop") { echo "class='selected'"; } ?>>Shop</a></li>
                    <li><a href="contact.php" <?php if ($section == "Contact") { echo "class='selected'"; } ?>>Contact</a></li>

                </ul>
                
            </li>

        </ul>

    </nav><!-- #MobileNav -->
        
    </header>

    <section class="content<?php if ($section == "Landing") {echo "-landing";} ?><?php if ($section == "Video") {echo "-video";} ?>">
        
        <?php if ($section != "Landing") { echo '<div class="wrapper">' ;}?>
        