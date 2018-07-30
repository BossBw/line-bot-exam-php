<?php



require "vendor/autoload.php";

$access_token = 'Nkajza5LFTRWiXb7rRIytmPgDK7fjFoYBRMYDvsNEQOL39sr/+IxiJ4lQaEqzOUxHb5aizDgLR1S1LJhSZXoqvihcx0thakbEPmSfDu2cnpRpmSMImh4Pr+mVTmVNRGK2hPgUkvRk6ipqFFgzSTsKQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4ed32fad6b653d8c2b5038e4732ce8d1';

$pushID = 'Ua6bb081a9f65dbd47a99f6c38c0e8144';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







