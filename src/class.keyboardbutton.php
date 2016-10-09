<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#keyboardbutton
 *
 * KeyboardButton Class
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this object to specify text of the button. Optional fields are mutually exclusive.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class KeyboardButton{
  /** @var string $text Text of the button. If none of the optional fields are used, it will be sent to the bot as a message when the button is pressed */
  public $text;

  /** @var bool $request_contact Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only */
  public $request_contact;

  /** @var bool $request_location Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only */
  public $request_location;
		
  public function __construct(){ }
}