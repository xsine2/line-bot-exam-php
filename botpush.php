<?php



require "vendor/autoload.php";

$access_token = 'BDfGtp3MyYQWUdssa0QSCX5diOKZz/Q3UT2SALTwEuwwu60614GiRkuxC46o6LGCxSxFapdg+xeT28m46oPOXjpKFbtVedryJqUaB6fU55scDwXK/8yE9jUTO1XRYpfVWNJhZ8XNqLdBSIOBIgMeGwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd7957d71691faf19579ebafc7be94eaa';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
