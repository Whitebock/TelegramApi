<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#chat
 *
 * Chat Class
 * This object represents a chat.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Chat{
  /** @var int $id Unique identifier for this chat. */
  public $id;

  /** @var string $type Type of chat, can be either “private”, “group”, “supergroup” or “channel” */
  public $type;

  /** @var string $title Optional. Title, for supergroups, channels and group chats */
  public $title;

  /** @var string $username Optional. Username, for private chats, supergroups and channels if available */
  public $username;

  /** @var string $first_name Optional. First name of the other party in a private chat */
  public $first_name;

  /** @var string $last_name Optional. Last name of the other party in a private chat */
  public $last_name;

  /** @var bool $all_members_are_administrators Optional. True if a group has ‘All Members Are Admins’ enabled. */
  public $all_members_are_administrators;

	public function __construct(){ }
}