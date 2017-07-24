## Telegram BotApi
A PHP Wrapper for the [Telegram Bot Api](https://core.telegram.org/bots/api)

<span ><a href="https://www.paypal.me/SvenDrewniok" title="Donate"><img src="https://img.shields.io/badge/donate-paypal-blue.svg" alt="Donate on PayPal" /></a></span>

### Todo

Currently being refactored, see the latest <a href="https://github.com/Whitebock/TelegramBot-ApiWrapper/releases">releases</a> for a stable version.

- [ ] Bot Api 3.2
- [x] Complete send functions
- [ ] Add group administration
- [ ] Inline mode
- [ ] Games

### Demo
See <a href="https://github.com/Whitebock/TelegramBot-ApiWrapper/blob/master/bot.demo.php">bot.demo.php</a> for a basic startup.

### Changelog
```

Version 1.2
+ class.chatmember.php
+ class.responseparameters.php
* full phpDoc comments
- removed closing php tag in pure php files

Version 1.1
* class.bot.php
  + getUserProfilePhotos
  + getFile
* class.file.php
  + download
  + downloadTo

Version 1.0
+ support for api 2.0
+ all send functions

Version 0.9
+ universal constructor
* class.bot.php
  + sendSticker

Version 0.8
+ phpdoc comments
* inc.init.php renamed to api.telegram.php
* class.bot.php
  + serializePOSTData
  * sendMessage
  + sendPhoto
  + sendChatAction

Version 0.7
* inc.init.php
  * parseClass
* class.bot.php
  + setWebhook
  + sendMessage

Version 0.6
+ inc.init.php
* class.bot.php
  + sendPostRequest
  + getMe
  + getUpdates

Version 0.5
+ class.bot.php
* class.message.php

Version 0.4
+ class.audio.php
+ class.chat.php
+ class.contact.php
+ class.document.php
+ class.file.php
+ class.forcereply.php
+ class.location.php
+ class.message.php
+ class.photosize.php
+ class.replykeyboardhide.php
+ class.replykeyboardmarkup.php
+ class.sticker.php
+ class.update.php
+ class.user.php
+ class.userprofilephotos.php
+ class.video.php
+ class.voice.php
```
