<?php


$access_token = 'BDfGtp3MyYQWUdssa0QSCX5diOKZz/Q3UT2SALTwEuwwu60614GiRkuxC46o6LGCxSxFapdg+xeT28m46oPOXjpKFbtVedryJqUaB6fU55scDwXK/8yE9jUTO1XRYpfVWNJhZ8XNqLdBSIOBIgMeGwdB04t89/1O/w1cDnyilFU=';

$userId = 'U12073aea801c8a035d0dad6481426f38';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
