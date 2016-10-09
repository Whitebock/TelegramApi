<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#responseparameters
 *
 * ResponseParameters Class
 * Contains information about why a request was unsuccessfull.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ResponseParameters{
  /** @var int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. */
  public $migrate_to_chat_id;

  /** @var int $retry_after Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated */
  public $retry_after;
		
  public function __construct(){ }
}