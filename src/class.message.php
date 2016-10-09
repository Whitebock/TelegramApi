<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#message
 *
 * Message Class
 * This object represents a message.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Message{
  /** @var string $message_id Unique message identifier */
  public $message_id;

  /** @var User $from Optional. Sender, can be empty for messages sent to channels */
  public $from;

  /** @var int $date Date the message was sent in Unix time */
  public $date;

  /** @var Chat $chat Conversation the message belongs to */
  public $chat;

  /** @var User $forward_from Optional. For forwarded messages, sender of the original message */
  public $forward_from;

  /** @var Chat $forward_from_chat Optional. For messages forwarded from a channel, information about the original channel */
  public $forward_from_chat;

  /** @var int $forward_date Optional. For forwarded messages, date the original message was sent in Unix time */
  public $forward_date;

  /** @var Message $reply_to_message Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
  public $reply_to_message;

  /** @var int $edit_date Optional. Date the message was last edited in Unix time */
  public $edit_date;

  /** @var string $text Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters. */
  public $text;

  /** @var MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text */
  public $entities;

  /** @var Audio $audio Optional. Message is an audio file, information about the file */
  public $audio;

  /** @var Document $document Optional. Message is a general file, information about the file */
  public $document;

  /** @var Game $game Optional. Message is a game, information about the game. */
  public $game;

  /** @var PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo */
  public $photo;

  /** @var Sticker $sticker Optional. Message is a sticker, information about the sticker */
  public $sticker;
  
  /** @var Video $video Optional. Message is a video, information about the video */
  public $video;

  /** @var Voice $voice Optional. Message is a voice message, information about the file */
  public $voice;

  /** @var string $caption Optional. Caption for the document, photo or video, 0-200 characters */
  public $caption;

  /** @var Contact $contact Optional. Message is a shared contact, information about the contact */
  public $contact;

  /** @var Location $location Optional. Message is a shared location, information about the location */
  public $location;

  /** @var Venue $venue Optional. Message is a venue, information about the venue */
  public $venue;

  /** @var User $new_chat_member Optional. A new member was added to the group, information about them (this member may be the bot itself) */
  public $new_chat_member;

  /** @var User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself) */
  public $left_chat_member;

  /** @var string $new_chat_title Optional. A chat title was changed to this value */
  public $new_chat_title;

  /** @var PhotoSize[] $new_chat_photo Optional. A chat photo was changed to this value */
  public $new_chat_photo;

  /** @var bool $delete_chat_photo Optional. Service message: the chat photo was deleted */
  public $delete_chat_photo;

  /** @var bool $group_chat_created Optional. Service message: the group has been created */
  public $group_chat_created;

  /** @var bool $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup. */
  public $supergroup_chat_created;

  /** @var bool $channel_chat_created Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel. */
  public $channel_chat_created;

  /** @var int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier. */
  public $migrate_to_chat_id;

  /** @var int $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier. */
  public $migrate_from_chat_id;

  /** @var Message $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply. */
  public $pinned_message;

  public function __construct(){ }
}