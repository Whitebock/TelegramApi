<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#chatmember
 *
 * ChatMember Class
 * This object contains information about one member of the chat.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ChatMember{
  /** @var User $user Information about the user */
  public $user;

  /** @var string $status The member's status in the chat. Can be “creator”, “administrator”, “member”, “left” or “kicked” */
  public $status;
		
  public function __construct(){ }
}