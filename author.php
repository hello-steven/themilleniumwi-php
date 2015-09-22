<?php

include("inc/functions.php");

if (isset($_GET["id"])) {
	$author_id = $_GET["id"];
	if (isset($authors[$author_id])) {
		$author = $authors[$author_id];
	}
}
if (!isset($author)) {
	header("Location: authors.php");
	exit();
}


$section = "Band";
$pageTitle = $author['nickname'];
include ('inc/header.php');
?>

<section id="BandNav">
    
    <h2 class='page-title'>
        
        Meet | <?php echo $author["display_name"]; ?>
        
    </h2>

    <nav id="MemberProfileNav">
        
        <?php foreach($authors as $author_id => $author) { 
									echo authors_nav($author_id,$author);
								}
        ?>
        
    </nav><!-- #MemberProfileNav -->
    
        <?php 

            if (isset($_GET["id"])) { 
                $author_id = $_GET["id"]; 
                if (isset ($authors[$author_id])) {
                    $author= $authors[$author_id];
                }
            } 
            if (!isset($author)) {
                header("Location: authors.php");
                exit();
            } 

        ?>

</section><!-- BandNav -->

<section id="aboutHeader">

    <div id="profilePhoto">
        
        <img id="author-photo" src="<?php if ( $pageTitle != "TheMillenium" ) {echo '//graph.facebook.com/' . $author["facebook_id"] . '/picture?width=9999' ;} else { echo $author["img"] ;} ?>" alt="<?php echo $author['display_name'] ?> Photo">

    </div><!-- #profilePhoto -->
    
    <div id="twitter-wrapper">
                    
                    <a class="twitter-timeline"
                        width="100%"
                        href="https://twitter.com/<?php echo $author["twitter_id"]; ?>"
                        data-widget-id="505855025675911168"
                        data-screen-name="<?php echo $author["twitter_id"]; ?>"
                        data-show-replies="false"
                        data-tweet-limit="0"
                        data-border-color="#000000">
                        Tweets by @<?php echo $author["twitter_id"]; ?>
                    </a>

                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                    </script> 

    </div><!-- #twitter-wrapper -->

</section><!--#aboutHeader -->

<section class="bio<?php if ( $pageTitle != "TheMillenium" ){ echo '-off';} ?>">
    
    <h2 class="page-title" id="title-icons">Bio</h2>
    
    <div>
        
        <p>&quot;If we treat people as they are, we make them worse. If we treat people as they could be, we make them better.&quot;</p>

<p>That&#39;s the mentality alternative pop rock band, The Millenium, aims to exemplify through their music. Breaking into the scene in early May opening for The Summer Set, the group has since been hard at work playing shows, showcasing their music, and meeting new people. Within a few short months the band has successfully completed numerous midwest and east coast tours securing a loyal fanbase and finding a place in their hearts with their debut EP, &quot;It&#39;s So Much Friendlier With Two,&quot; a record dedicated to love, loss, and learning - themes that resonate not just with each member individually, but have gone as far as defining our generation as a whole.</p>

<p>While often feeling like a pop band in a punk world, The Millenium strives to bring more non traditional elements into their sound. Incorporating realms of indie, acoustic and electronic styles in a sometimes eclectic fashion, one is sure to appreciate a genuine sound showcasing undeniably catchy and melodically driven tracks intertwined with a playful and inventive blend of acoustic guitar and keyboard.</p>

<p>&quot;These songs are an extension of ourselves, much in the same way as our arms and legs,&quot; says The Millenium. &quot;These songs created us more than we created them, and it is with this we hope to connect to our audience through shared experiences.&quot;</p>


<p>It was the demise of their previous bands around relatively similar times that brought Kyle Culver and Matt Hasenmueller, from The Last Semester, and Kyle Featherstone and Sean Koran, from The Picture Perfect, together. Everyone felt drawn together creatively after becoming friends through the music scene while living in Eau Claire, Wisconsin. After much preparation, they hit the stage for the first time on May 2, opening for The Summer Set at UW-Eau Claire. They have since toured with Hollywood Ending and Late Night Reading.</p>
    
    </div>

</section><!-- .bio -->

<?php
include ('inc/footer.php'); ?>
