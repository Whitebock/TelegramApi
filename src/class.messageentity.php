<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#messageentity
 *
 * MessageEntity Class
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class MessageEntity{
  /** @var string $type Type of the entity. Can be mention (@username), hashtag, bot_command, url, email, bold (bold text), italic (italic text), code (monowidth string), pre (monowidth block), text_link (for clickable text URLs), text_mention (for users without usernames) */
  public $type;

  /** @var int $offset Offset in UTF-16 code units to the start of the entity */
  public $offset;

  /** @var int $length Length of the entity in UTF-16 code units */
  public $length;

  /** @var string $url Optional. For “text_link” only, url that will be opened after user taps on the text */
  public $url;

  /** @var User $user Optional. For “text_mention” only, the mentioned user */
  public  $user;

  public function __construct(){ }
}