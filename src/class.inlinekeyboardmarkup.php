<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * InlineKeyboardMarkup Class
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class InlineKeyboardMarkup{
  /** @var InlineKeyboardButton[][] $inline_keyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects */
  public $inline_keyboard;
  
  public function __construct(){ }
}