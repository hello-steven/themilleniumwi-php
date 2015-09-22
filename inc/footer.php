<?php 
    include_once("brand-assets.php");
?>
    <?php if ($section != "Landing") { echo '</div><!--.wrapper-->' ;} ?>
    <?php if ($section != "Landing") { include('sidebar.php'); } ?>
    </section><!--content-->

	<footer <?php if ($section == "Landing") { echo 'class="landing"'; } ?>>

		<div class="social-wrapper">
            
            <a href="<?php echo $bandcamp_assets["bandcamp"]['full_url'] ?>" target="blank"><img src="img/<?php echo $bandcamp_assets["bandcamp"]["img"]?>"></a>

		</div><!--social wrapper-->
        
        <div class="social-wrapper">
            
            <a href="<?php echo $social_assets['facebook']['full_url'] ?>" target="blank"><img src="img/<?php echo $social_assets["facebook"]["img"]?>"></a>
            
            <?php foreach($music_assets as $music_id => $music_asset) { 
									echo footer_assets($music_id,$music_asset);
								}
            ?>
            
            <a href="<?php echo $social_assets['twitter']['full_url'] ?>" target="blank"><img src="img/<?php echo $social_assets["twitter"]["img"]?>"></a>

            <a href="<?php echo $social_assets['instagram']['full_url'] ?>" target="blank"><img src="img/<?php echo $social_assets["instagram"]["img"]?>"></a>

		<div class="footer-credits">
            
            <p class="credits-left">
                
                <a href="<?php if ($section == 'Landing'){ echo 'authors.php' ;} else { echo './' ;}?>">The Millenium</a> &copy;<?php echo date('Y'); ?> 
                
            </p>
            
            <p class="credits-right<?php if ($section == "Landing"){ echo "-off";} ?>">
				
				<a title="To the Top" class="tothetop" href="#top">UP&uarr;</a>
				
			</p>
            
        </div><!-- .footer-credits -->		

	</footer>

</body>
</html>