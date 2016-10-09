<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#forcereply
 *
 * ForceReply Class
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot‘s message and tapped ’Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ForceReply{
  /** @var bool $force_reply Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply' */
  public $force_reply;

  /** @var bool $selective Optional. Use this parameter if you want to force reply from specific users only. Targets: <ol><li>users that are @mentioned in the text of the Message object;</li><li>if the bot's message is a reply (has reply_to_message_id), sender of the original message.</li></ol> */
  public $selective;
		
  public function __construct(){ }
}