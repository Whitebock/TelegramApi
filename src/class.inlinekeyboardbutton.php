<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 *
 *
 * InlineKeyboardButton Class
 * This object represents one button of an inline keyboard. You must(!) use exactly one of the optional fields.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class InlineKeyboardButton{
  /** @var string $text Label text on the button */
  public $text;

  /** @var string $url Optional. HTTP url to be opened when button is pressed */
  public $url;

  /** @var string $callback_data Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes */
  public $callback_data;

  /** @var string $switch_inline_query Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted. */
  public $switch_inline_query;

  /** @var string $switch_inline_query_current_chat Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot’s username will be inserted. */
  public $switch_inline_query_current_chat;
  
  /** @var CallbackGame $callback_game Optional. Description of the game that will be launched when the user presses the button. <br><b>NOTE</b>: This type of button must always be the first button in the first row. */
  public $callback_game;
		
  public function __construct(){ }
}