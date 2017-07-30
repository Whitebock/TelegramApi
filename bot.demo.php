<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Whitebock\TelegramApi\Bot;
use Whitebock\TelegramApi\Photo;

$bot = new Bot('');

$me = $bot->getMe();
echo $me->getUsername().PHP_EOL;

$updates = $bot->getUpdates();
foreach ($updates as $update) {
    $chat = $update->getMessage()->getChat();

    echo $chat->getUsername().': '.$update->getMessage()->getText().PHP_EOL;

    $bot->sendMessage($chat, 'Hello World');
    $bot->sendChatAction($chat, 'upload_photo');
    $bot->sendMedia($chat, Photo::fromFile('test/bird.jpg'));
    $bot->sendLocation($chat, 52.520038, 13.404799);
    $bot->sendContact($chat,'+49123456789', 'John');
    $bot->sendVenue($chat, 51.496797, 7.455505, 'Westfalenhallen', 'Rheinlanddamm 200, 44139 Dortmund');
}
