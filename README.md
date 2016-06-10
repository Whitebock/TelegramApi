## Telegram BotApi
A PHP Wrapper for the [Telegram Bot Api](https://core.telegram.org/bots/api)

###TODO

- [x] Bot Api 2.0
- [ ] Complete bot functions
- [ ] Add group administration
- [ ] Inline mode

###DEMO

**GET BOT OBJECT**
```php
require_once('./src/api.telegram.php');
$bot = new Bot('token');
```

**GET ME**
```php
$me = $bot -> getMe();
echo 'Username: '.$me -> username.'<br>';
```

**GET MANUAL UPDATES**
```php
$updates = $bot -> getUpdates();
foreach($updates as $update){
	echo $update -> message -> from -> username.':  '.$update -> message -> text.'<br>';
}
```

**SET WEBHOOK**
```php
$obj = $bot -> setWebhook(array('url' => 'https://example.com/bot.demo.php'));
$boolstring = ($obj) ? 'true' : 'false';
echo 'Webhook set: '.$boolstring;
```

**GET WEBHOOK UPDATES**
```php
$stream_data = file_get_contents('php://input');
$json = json_decode($stream_data);

$update = parseClass($json, 'Update');
```

### CHANGELOG
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
