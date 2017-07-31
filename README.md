# Telegram BotApi
A PHP Wrapper for the [Telegram Bot Api](https://core.telegram.org/bots/api)
Currently being refactored, see the latest [releases](https://github.com/Whitebock/TelegramBot-ApiWrapper/releases") for a stable version.

<span ><a href="https://www.paypal.me/SvenDrewniok" title="Donate"><img src="https://img.shields.io/badge/donate-paypal-blue.svg" alt="Donate on PayPal" /></a></span>

* [Todo List](#todo)
* [Installation](#installation)
  * [Composer](#composer)
  * [Manual](#manual)
* [Usage / Demo Bot](#demo)
* [Changelog](#changelog)
  * [Unreleased](#unreleased)
  * [Latest Version](#120)
    * [Download](https://github.com/Whitebock/TelegramApi/releases/tag/1.2.0)


## Todo

- [ ] Bot Api 3.2
- [ ] Complete send functions
- [ ] Add group administration
- [ ] Inline mode
- [ ] Games

## Installation
### Composer
When using [composer](https://getcomposer.org/) you can just require this library: `composer require whitebock/telegramapi`

### Manual
Manual installation without composer is being worked on.

## Demo
Set your token from [@BotFather](https://t.me/BotFather) in the constructor.
```php
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
```

## Changelog
All notable changes to this project will be documented here.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

### [Unreleased]
### Added
- Composer files
- Namespace
- Getters & Fluent Setters
- Method: callApi
- Typehinting
- Added StickerSet.php in new /Sticker/ Namespace
- Added MaskPosition.php in new /Sticker/ Namespace
- Added sendMedia
### Changed
- Switched from private to protected variables
- Changed deserialization from parseClass to symfony
### Removed
- PhpDoc version annotation
- Method: sendPOSTRequest
- Replaced sendPhoto
- Replaced sendAudio
- Replaced sendDocument
- Replaced sendSticker
- Replaced sendVideo
- Replaced sendVoice

### [1.2.0]
#### Added
- class.chatmember.php
- class.responseparameters.php
#### Changed
- full phpDoc comments
#### Removed
- closing php tag in pure php files

### [1.1.0]
#### Added
- class.bot.php
  - getUserProfilePhotos
  - getFile
- class.file.php
  - download
  - downloadTo

### [1.0.0]
#### Added
- support for api 2.0
- all send functions

### [0.9.0]
#### Added
- universal constructor
- class.bot.php
  - sendSticker

### [0.8.0]
#### Added
- phpdoc comments
- class.bot.php
  - serializePOSTData
  - sendPhoto
  - sendChatAction
#### Changed
- inc.init.php renamed to api.telegram.php
- class.bot.php
  - sendMessage
  
### [0.7.0]
#### Added
- class.bot.php
  - setWebhook
  - sendMessage
#### Changed
- inc.init.php
  - parseClass

### [0.6.0]
#### Added
- inc.init.php
- class.bot.php
  - sendPostRequest
  - getMe
  - getUpdates

### [0.5.0]
#### Added
- class.bot.php
- class.message.php

### [0.4.0]
#### Added
- class.audio.php
- class.chat.php
- class.contact.php
- class.document.php
- class.file.php
- class.forcereply.php
- class.location.php
- class.message.php
- class.photosize.php
- class.replykeyboardhide.php
- class.replykeyboardmarkup.php
- class.sticker.php
- class.update.php
- class.user.php
- class.userprofilephotos.php
- class.video.php
- class.voice.php
