 <?php
  // require_once('Twitter/TwitterAPIExchange.php');
  // define("CONSUMER_KEY", "7p21sIGn1k1zl2bNeX6WeRnz6");
  // define("CONSUMER_SECRET","4Oh35rIiOfppOjDCn1Ct1wGxJObCzVvVjpoS6oRmrBWmYhHJyx");
  // define("OAUTH_TOKEN", "4884339495-gXZQfJexquszepuhOlb0jSpeEyfV52ktADQQ9J2");
  // define("OAUTH_SECRET", "JDr9B41baWCLagAHeD5GbegevzPB5qxCxAHEcy9Q5OJZT");
  // $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
  // $content = $connection->get('account/verify_credentials');
  // $connection->post('statuses/update', array('status' => 'twit with http://vdstudio.com - say hello'));

  // $settings = array(
  //   'oauth_access_token' => "4884339495-gXZQfJexquszepuhOlb0jSpeEyfV52ktADQQ9J2",
  //   'oauth_access_token_secret' => "JDr9B41baWCLagAHeD5GbegevzPB5qxCxAHEcy9Q5OJZT",
  //   'consumer_key' => "7p21sIGn1k1zl2bNeX6WeRnz6",
  //   'consumer_secret' => "4Oh35rIiOfppOjDCn1Ct1wGxJObCzVvVjpoS6oRmrBWmYhHJyx");

require_once 'Twitter/src/twitter.class.php';
$message = $_GET['message'];
$result = $_GET['result'];
$img_path = $_GET['img_path'];
// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$consumerKey = '7p21sIGn1k1zl2bNeX6WeRnz6'; 
$consumerSecret='4Oh35rIiOfppOjDCn1Ct1wGxJObCzVvVjpoS6oRmrBWmYhHJyx';
$accessToken='4884339495-gXZQfJexquszepuhOlb0jSpeEyfV52ktADQQ9J2';
$accessTokenSecret='JDr9B41baWCLagAHeD5GbegevzPB5qxCxAHEcy9Q5OJZT';

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

try {
	$tweet = $twitter->send($message,$img_path); // you can add $imagePath as second argument
	header("HTTP/1.1 301 Moved Permanently");                    
    header("Location: ./result.php?result=$result");
    exit;

} catch (TwitterException $e) {
	echo 'Error: ' . $e->getMessage();
}


  ?>