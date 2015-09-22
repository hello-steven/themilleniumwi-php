<?php

function authors_nav($author_id, $author) {
    
    $output = "";

    $output = $output . '<a href="author.php?id=' . $author_id . '">';
    $output = $output . $author["display_name"];
    $output = $output . '</a>';
    
    return $output;
}

$authors = array();
$authors["the-millenium"] = array(
	"display_name" => "The Millenium",
    "img" => "img/themillenium-avatar.jpg",
    "nickname"=> "TheMillenium",
	"facebook_id" => '254988081308960',
    "instagram" => "h=dGhlbWlsbGVuaXVtd2l8aW58MzAwfDN8M3x8bm98M3x1bmRlZmluZWR8eWVz",
    "twitter_id" => "TheMilleniumWI",
);
$authors["matt-hasenmueller"] = array(
	"display_name" => "Matt Hasenmueller",
    "nickname"=> "Matt",
    "facebook_id" => '680940827',
    "instagram" => "h=bWF0dGhhbnNlbm11ZWxsZXJ8aW58MTUwfDN8Mnx8eWVzfDV8dW5kZWZpbmVkfHllcw",
    "twitter_id" => "mateohas",
);
$authors["kyle-culver"] = array(
    "display_name" => "Kyle Culver",
    "nickname"=> "Culver",
    "facebook_id" => '564551257',
    "instagram" => "u=aWFta3lsZWN1bHZlcnxpbnwxNTB8M3wyfHx5ZXN8NXx1bmRlZmluZWR8eWVz",
    "twitter_id" => "iamkyleculver",
);
$authors["sean-koran"] = array(
    "display_name" => "Sean Koran",
    "nickname"=> "Sean",
    "facebook_id" => '1366519209',
    "instagram" => "u=c2VhbmtvcmFufGlufDE1MHwzfDJ8fHllc3w1fHVuZGVmaW5lZHx5ZXM",
    "twitter_id" => "Iamseanjames",
);
$authors["kyle-featherstone"] = array(
    "display_name" => "Kyle Featherstone",
    "nickname"=> "Feather",
    "facebook_id" => '552860181', 
    "instagram" => "u=a3lsZWZlYXRoZXJzdG9uZXxpbnwxNTB8M3wyfHx5ZXN8NXx1bmRlZmluZWR8eWVz", 
    "twitter_id" => "KFeath",
);


?>