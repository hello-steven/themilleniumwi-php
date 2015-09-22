<html>
<head>
    <title>The Millenium | Thanks</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/main.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700|Open+Sans:300italic,400italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../finalproject/js/main-nav.js"></script>
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#000000">
</head>
<body >

	<header >

		<div class="logo-wrapper">

            <a href="./" id="logo">
			    <img name="top" src="img/TheMilleniumBoxLogo.png" alt="The Millenium">
		    </a>

		</div>
        
    

    <nav id="MainNav" class="scroll">

        <a href="authors.php" >Band</a>

        <a href="music.php" >Music</a>

        <a href="video.php" >Video</a> 

        <a href="shop.php" >Shop</a>
        
        <a href="contact.php" class='selected'>Contact</a>


    </nav><!-- #MainNav -->
    
    <nav id="MobileNav" class="scroll">

        <ul>

            <li id="hamburger"><a id="patty" href="#">Menu</a>

                <ul>

                    <li><a href="authors.php" >Band</a></li>

                    <li><a href="music.php" >Music</a></li>

                    <li><a href="video.php" >Video</a></li> 
                    
                    <li><a href="shop.php" >Shop</a></li>
                    <li><a href="contact.php" class='selected'>Contact</a></li>

                </ul>
                
            </li>

        </ul>

    </nav><!-- #MobileNav -->
        
    </header>

    <section class="content">
        
        <div class="wrapper">        
<h2 class='page-title' id="title-icons">Thank You!</h2>

<div class="title-icons">

    <a href="https://www.facebook.com/themilleniumwi" target="blank"><img src="img/facebook.png" alt="facebook logo"></a><a href="https://instagram.com/themilleniumwi/" target="blank"><img src="img/instagram.png" alt="instagram logo"></a><a href="https://twitter.com/themilleniumWI" target="blank"><img src="img/twitter.png" alt="twitter logo"></a>
</div><!-- .title-icons -->
		
<aside id="ContactWrapper">

                    <!-- This entire script, including the opening < % to the closing % >, can be nested inside of any other tag, such as div or p, to control positioning and formatting of the confirmation message spit out by the email script -->
                    <div style="color: <%=Request.Form("color")%>; font-size: 1rem; text-align: center;">
                    <%
                    ' The apostrophe is a comment tag inside of this ASP script tag, opened just above this line
                    ' Get the data from the form that submitted to this page
                    senderName	= Request.Form("fullname")
                    senderEmail	= Request.Form("email")
                    subject		= Request.Form("subject")
                    ' Change recipient in the next line to use your email address, notice static value in quotes
                    ' This is formatting for the email that will be sent to you
                    ' vbcrlf is = to a enter in the email
                    recipient	= "prices7@gmatc.matc.edu"
                    body		= "Steven," & vbcrlf & vbcrlf
                    body = body & Request.Form("comments") & vbcrlf & vbcrlf
                    body = body & "Sincerely,"  & vbcrlf & vbcrlf 
                    body = body & Request.Form("fullname") & vbcrlf & vbcrlf 
                    body = body & Request.Form("email") & vbcrlf & vbcrlf 


                    ' Create the JMail message Object, do not change this
                    set msg = Server.CreateOBject( "JMail.Message" )
                    ' Set logging to true to ease any potential debugging, do not change this
                    msg.Logging = true
                    ' Set silent to true as we wish to handle our errors ourself, do not change this
                    msg.silent = true
                    ' Enter the sender data from the variables into the JMail object, value defined above
                    msg.From = senderEmail
                    msg.FromName = senderName
                    ' Note that because addRecipient is a method and not a property, we do not use an equals ( = ) sign
                    msg.AddRecipient recipient
                    ' Adding a CC does not use an equals sign either
                    msg.AddRecipientCC email
                    ' High priority = 1, regular priority = 3, low priority = 5
                    msg.Priority = 3
                    ' The subject of the message, value defined above
                    msg.Subject = "Message for The Millenium"

                    ' And the body, value defined above
                    msg.body = body

                    ' Now send the message using the indicated mailserver - "localhost" in this case
                    ' If using a different server, contact hosting company to ask what mail server should be used
                    ' Or, display the error message if not sent 
                    if not msg.Send("smtp.gw.matc.edu" ) then
                        Response.write "<pre>" & msg.log & "</pre>"
                    else
                    ' Customize confirmation message inside quotes below
                    ' This will display on the top of the page
                        Response.write Request.Form("fullname") & vbcrlf & ", your message has been sent. Stay golden!"
                    end if
                    ' And we are done! the message has been sent.
                    %></div>

                    <br/>
                    <br/>
                    <!-- This is what would display on the webpage -->
                    <!--  -->
                    <!--<p>Name: <%= Request.Form("fullname") %></p>-->
                    <!--<p>Email: <%= Request.Form("email") %></p>-->
                    <!--<p>Comments: <%= Request.Form("comments") %></p>-->

           </aside><!--ContactWrapper-->

    </div><!--.wrapper-->    <aside class="sidebar">
    
    <div class='call-to-action'>
    
        <img src="img/cover-photo.jpg" alt="I.S.M.F.W.T. Album Cover">
    
        <p class="page-title">
            <a href='http://themilleniumwi.bandcamp.com/' target="blank">Claim Your Free Download</a>
        </p>
        
    </div>
    
    <div class="tour-dates">
        
        <p class='page-title'>Tour Dates</p>
        
        <script type='text/javascript' src='http://widget.bandsintown.com/javascripts/bit_widget.js'></script><a href="http://www.bandsintown.com/TheMillenium" class="bit-widget-initializer" data-artist="TheMillenium" data-force-narrow-layout="true" data-display-limit="5">TheMillenium Tour Dates</a>
        
    </div><!-- .tour-dates -->
    
</aside>    </section><!--content-->

	<footer >

		<div class="social-wrapper">
            
            <a href="http://themilleniumwi.bandcamp.com/" target="blank"><img src="img/bandcamp.png"></a>

		</div><!--social wrapper-->
        
        <div class="social-wrapper">
            
            <a href="https://www.facebook.com/themilleniumwi" target="blank"><img src="img/facebook.png"></a>
            
            <a href="https://itunes.apple.com/us/album/its-so-much-friendlier-two/id828582248" target="blank"><img src="img/itunes.png" alt="itunes logo"></a><a href="http://amzn.com/B00INN1TI8" target="blank"><img src="img/amazon.png" alt="amazon logo"></a><a href="https://play.spotify.com/artist/3jNoP069MtTeU5wWbLywwU" target="blank"><img src="img/spotify.png" alt="spotify logo"></a><a href="https://soundcloud.com/themilleniumwi" target="blank"><img src="img/soundcloud.png" alt="soundcloud logo"></a><a href="https://www.youtube.com/user/TheMilleniumWI" target="blank"><img src="img/youtube.png" alt="youtube logo"></a>            
            <a href="https://twitter.com/themilleniumWI" target="blank"><img src="img/twitter.png"></a>
            
        </div><!--social wrapper-->

        <div class="social-wrapper">
            
            <a href="https://instagram.com/themilleniumwi/" target="blank"><img src="img/instagram.png"></a>

		</div><!--social wrapper-->

		<div class="footer-credits">
            
            <p class="credits-left">
                
                <a href="./">The Millenium</a> &copy;2015 
                
            </p>
            
            <p class="credits-right">
				
				<a title="To the Top" class="tothetop" href="#top">UP&uarr;</a>
				
			</p>
            
        </div><!-- .footer-credits -->		

	</footer>

</body>
</html>