<?php

$section = "Music";
include ('inc/header.php');
include('inc/brand-assets.php');
?>

<h2 class='page-title' id="music-title">Music</h2>

<div class="music-icons">
    
    <a href="https://itunes.apple.com/us/album/<?php echo $music_assets['itunes']['ISMFWT'] ?>" target="blank"><img src="img/itunes.png"></a>
    
    <a href="https://soundcloud.com/<?php echo $music_assets['soundcloud']['username'] ?>" target="blank"><img src="img/soundcloud.png"></a>
    
    <a href="https://open.spotify.com/album/<?php echo $music_assets['spotify']['ISMFWT'] ?>" target="blank"><img src="img/spotify.png"></a>
    
    <a href="http://amzn.com/<?php echo $music_assets['amazon']['ISMFWT'] ?>" target="blank"><img src="img/amazon.png"></a>

</div>

<div class="music-player">
    
    <iframe style="border: 0; width: 100%; height: 307px;" src="http://bandcamp.com/EmbeddedPlayer/album=3656058644/size=large/bgcol=ffffff/linkcol=333333/artwork=small/transparent=true/" seamless><a href="http://themilleniumwi.bandcamp.com/album/its-so-much-friendlier-with-two-2">It&#39;s So Much  Friendlier With Two by The Millenium</a></iframe>
    
</div>

<div class="music-player">
    
    <iframe style="border: 0; width: 100%; height: 274px;" src="http://bandcamp.com/EmbeddedPlayer/album=319615062/size=large/bgcol=ffffff/linkcol=333333/artwork=small/transparent=true/" seamless><a href="http://themilleniumwi.bandcamp.com/album/pine-hollow-sessions">Pine Hollow Sessions by The Millenium</a></iframe>
    
</div>

<?php include ('inc/footer.php'); ?>
