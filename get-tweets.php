<?php
session_start();
require_once("twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "kieraBOOM";
$notweets = 50;
$consumerkey = "EVOemzIxSxUhylvVSpJl9A";
$consumersecret = "zLVf45qzGO44x7mR4rPlm9cGGMwuS1CEtvaviYlE";
$accesstoken = "23404114-sCuyOY3V1hcVey0Yt1ra06UadMadi7AW6fzUDBz0r";
$accesstokensecret = "u3EVQWtc9YVC7dfsGAMBN7l21NrSnVWyJjCinpZRR1o";

 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?kieraBOOM=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>