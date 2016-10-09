<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#replykeyboardmarkup
 *
 * ReplyKeyboardMarkup Class
 * This object represents a custom keyboard with reply options
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ReplyKeyboardMarkup{
  /** @var KeyboardButton[][] $keyboard Array of button rows, each represented by an Array of KeyboardButton objects */
  public $keyboard;

  /** @var bool $resize_keyboard Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard. */
  public $resize_keyboard;

  /** @var bool $one_time_keyboard Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to false. */
  public $one_time_keyboard;

  /** @var bool $selective Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: <ol><li>users that are @mentioned in the text of the Message object;</li> <li>if the bot's message is a reply (has reply_to_message_id), sender of the original message.</li></ol> */
  public $selective;
		
  public function __construct(){ }
}