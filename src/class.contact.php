<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#contact
 *
 * Contact Class
 * This object represents a phone contact.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Contact{
  /** @var string $phone_number Contact's phone number */
  public $phone_number;

  /** @var string $first_name Contact's first name */
  public $first_name;

  /** @var string $last_name Optional. Contact's last name */
  public $last_name;

  /** @var int $user_id Optional. Contact's user identifier in Telegram */
  public $user_id;
		
  public function __construct(){ }
}