<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Whitebock\TelegramApi\Bot;

$bot = new Bot('');

$me = $bot->getMe();
echo $me->getLastName().' ('.$me->getUsername().')'.PHP_EOL;

$updates = $bot->getUpdates();
$offset = 0;
foreach ($updates as $update) {
    if ($update->getUpdateId() > $offset) {
        echo $update->getMessage()->getChat()->getUsername().': '.$update->getMessage()->getText().PHP_EOL;
        $bot->sendMessage($update->getMessage()->getChat()->getId(), $update->getMessage()->getText());
    }

    $offset = $update->getUpdateId();
}
