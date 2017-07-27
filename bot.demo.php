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

}
