<?php 

function footer_assets($music_id, $music) {
    
    $output = "";
    $output = $output . '<a href="' . $music["full_url"];
    $output = $output . '" target="blank"><img src="img/' . $music["img"];
    $output = $output . '" alt="'. $music_id . ' logo"></a>';
    
    return $output;
}

function icon_assets($social_id, $social) {
    
    $output = "";
    $output = $output . '<a href="' . $social["full_url"];
    $output = $output . '" target="blank"><img src="img/' . $social["img"];
    $output = $output . '" alt="'. $social_id . ' logo"></a>';
    
    return $output;
}

$music_assets = array();
$music_assets["itunes"] = array(
    "img" => "itunes.png",
    "full_url" => "https://itunes.apple.com/us/album/its-so-much-friendlier-two/id828582248",
    "ISMFWT" => "its-so-much-friendlier-two/id828582248",
    "Pine-Hollow" => "pine-hollow-sessions-ep/id969663115",
);
$music_assets["amazon"] = array(
    "img" => "amazon.png",
    "full_url" => "http://amzn.com/B00INN1TI8",
    "ISMFWT" => 'B00INN1TI8',
);
$music_assets["spotify"] = array(
    "img" => "spotify.png",
    "full_url" => "https://play.spotify.com/artist/3jNoP069MtTeU5wWbLywwU",
    "ISMFWT" => "6qdkEGZPIs7SeKGPe24ykZ",
);
$music_assets["soundcloud"] = array(
    "img" => "soundcloud.png",
    "username" => "themilleniumwi",
    "full_url" => "https://soundcloud.com/themilleniumwi",
    "ISMFWT" => "its-so-much-friendlier-with",
    "Pine-Hollow" => "pine-hollow-sessions",
);
$music_assets["youtube"] = array(
    "img" => 'youtube.png',
    "username" => "themilleniumwi",
    "full_url" => "https://www.youtube.com/user/TheMilleniumWI",
    "ISMFWT" => "https://www.youtube.com/playlist?list=PLYIGEtXf1oZ4g23iMCMWXRn_LN_Xq6HIK",
    "Pine-Hollow" => "https://youtu.be/cmnEEhwdbfc?list=PLYIGEtXf1oZ7P1ak9ZX6X7iyaKWFdnIcT",
);


$bandcamp_assets = array();
$bandcamp_assets["bandcamp"] = array(
    "img" => "bandcamp.png",
    "full_url" => "http://themilleniumwi.bandcamp.com/",
    "ISMFWT" => "http://themilleniumwi.bandcamp.com/album/its-so-much-friendlier-with-two-2",
    "Pine-Hollow" => "http://themilleniumwi.bandcamp.com/album/pine-hollow-sessions",
);


$social_assets = array();
$social_assets["facebook"] = array(
    "img" => 'facebook.png',
    "username" => "themilleniumwi",
    "full_url" => "https://www.facebook.com/themilleniumwi",
);
$social_assets["instagram"] = array(
    "img" => "instagram.png",
    "username" => "themilleniumwi",
    "full_url" => "https://instagram.com/themilleniumwi/",
);
$social_assets["twitter"] = array(
    "img" => "twitter.png",
    "username" => "themilleniumWI",
    "full_url" => "https://twitter.com/themilleniumWI",
);


?>