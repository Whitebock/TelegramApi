<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#user
 *
 * User Class
 * This object represents a Telegram user or bot.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class User{
  /** @var int $id Unique identifier for this user or bot */
	public $id;
  /** @var string $first_name User‘s or bot’s first name */
  public $first_name;
  /** @var string $last_name Optional. User‘s or bot’s last name */
  public $last_name;
  /** @var string $username Optional. User‘s or bot’s username */
  public $username;

	public function __construct(){ }
}