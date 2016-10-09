<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#callbackquery
 *
 * CallbackQuery Class
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class CallbackQuery{
  /** @var string $id Unique identifier for this query */
  public $id;

  /** @var User $from Sender */
  public $from;

  /** @var Message $message Optional. Message with the callback button that originated the query. <br>Note that message content and message date will not be available if the message is too old */
  public $message;

  /** @var string $inline_message_id Optional. Identifier of the message sent via the bot in inline mode, that originated the query. */
  public $inline_message_id;

  /** @var string $chat_instance Identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games. */
  public $chat_instance;

  /** @var string $data Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field. */
  public $data;

  /** @var string $game_short_name Optional. Short name of a Game to be returned, serves as the unique identifier for the game */
  public $game_short_name;
		
  public function __construct(){ }
}