<?php

namespace Whitebock\TelegramApi;

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
class Message
{
    /**
     * @var string $id Unique message identifier
     */
    protected $id;

    /**
     * @var User $from Optional. Sender, can be empty for messages sent to channels
     */
    protected $from;

    /**
     * @var int $date Date the message was sent in Unix time
     */
    protected $date;

    /**
     * @var Chat $chat Conversation the message belongs to
     */
    protected $chat;

    /**
     * @var User $forward_from Optional. For forwarded messages, sender of the original message
     */
    protected $forward_from;

    /**
     * @var Chat $forward_from_chat Optional. For messages forwarded from a channel, information about the original channel
     */
    protected $forward_from_chat;

    /**
     * @var int $forward_date Optional. For forwarded messages, date the original message was sent in Unix time
     */
    protected $forward_date;

    /**
     * @var Message $reply_to_message Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    protected $reply_to_message;

    /**
     * @var int $edit_date Optional. Date the message was last edited in Unix time
     */
    protected $edit_date;

    /**
     * @var string $text Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    protected $text;

    /**
     * @var MessageEntity[] $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     */
    protected $entities;

    /**
     * @var Audio $audio Optional. Message is an audio file, information about the file
     */
    protected $audio;

    /**
     * @var Document $document Optional. Message is a general file, information about the file
     */
    protected $document;

    /**
     * @var Game $game Optional. Message is a game, information about the game.
     */
    protected $game;

    /**
     * @var PhotoSize[] $photo Optional. Message is a photo, available sizes of the photo
     */
    protected $photo;

    /**
     * @var Sticker $sticker Optional. Message is a sticker, information about the sticker
     */
    protected $sticker;

    /**
     * @var Video $video Optional. Message is a video, information about the video
     */
    protected $video;

    /**
     * @var Voice $voice Optional. Message is a voice message, information about the file
     */
    protected $voice;

    /**
     * @var string $caption Optional. Caption for the document, photo or video, 0-200 characters
     */
    protected $caption;

    /**
     * @var Contact $contact Optional. Message is a shared contact, information about the contact
     */
    protected $contact;

    /**
     * @var Location $location Optional. Message is a shared location, information about the location
     */
    protected $location;

    /**
     * @var Venue $venue Optional. Message is a venue, information about the venue
     */
    protected $venue;

    /**
     * @var User $new_chat_member Optional. A new member was added to the group, information about them (this member may be the bot itself)
     */
    protected $new_chat_member;

    /**
     * @var User $left_chat_member Optional. A member was removed from the group, information about them (this member may be the bot itself)
     */
    protected $left_chat_member;

    /**
     * @var string $new_chat_title Optional. A chat title was changed to this value
     */
    protected $new_chat_title;

    /**
     * @var PhotoSize[] $new_chat_photo Optional. A chat photo was changed to this value
     */
    protected $new_chat_photo;

    /**
     * @var bool $delete_chat_photo Optional. Service message: the chat photo was deleted
     */
    protected $delete_chat_photo;

    /**
     * @var bool $group_chat_created Optional. Service message: the group has been created
     */
    protected $group_chat_created;

    /**
     * @var bool $supergroup_chat_created Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    protected $supergroup_chat_created;

    /**
     * @var bool $channel_chat_created Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    protected $channel_chat_created;

    /**
     * @var int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier.
     */
    protected $migrate_to_chat_id;

    /**
     * @var int $migrate_from_chat_id Optional. The supergroup has been migrated from a group with the specified identifier.
     */
    protected $migrate_from_chat_id;

    /**
     * @var Message $pinned_message Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    protected $pinned_message;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from)
    {
        $this->from = $from;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate(int $date)
    {
        $this->date = $date;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @param Chat $chat
     */
    public function setChat(Chat $chat)
    {
        $this->chat = $chat;
    }

    /**
     * @return User
     */
    public function getForwardFrom(): User
    {
        return $this->forward_from;
    }

    /**
     * @param User $forward_from
     */
    public function setForwardFrom(User $forward_from)
    {
        $this->forward_from = $forward_from;
    }

    /**
     * @return Chat
     */
    public function getForwardFromChat(): Chat
    {
        return $this->forward_from_chat;
    }

    /**
     * @param Chat $forward_from_chat
     */
    public function setForwardFromChat(Chat $forward_from_chat)
    {
        $this->forward_from_chat = $forward_from_chat;
    }

    /**
     * @return int
     */
    public function getForwardDate(): int
    {
        return $this->forward_date;
    }

    /**
     * @param int $forward_date
     */
    public function setForwardDate(int $forward_date)
    {
        $this->forward_date = $forward_date;
    }

    /**
     * @return Message
     */
    public function getReplyToMessage(): Message
    {
        return $this->reply_to_message;
    }

    /**
     * @param Message $reply_to_message
     */
    public function setReplyToMessage(Message $reply_to_message)
    {
        $this->reply_to_message = $reply_to_message;
    }

    /**
     * @return int
     */
    public function getEditDate(): int
    {
        return $this->edit_date;
    }

    /**
     * @param int $edit_date
     */
    public function setEditDate(int $edit_date)
    {
        $this->edit_date = $edit_date;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return MessageEntity[]
     */
    public function getEntities(): array
    {
        return $this->entities;
    }

    /**
     * @param MessageEntity[] $entities
     */
    public function setEntities(array $entities)
    {
        $this->entities = $entities;
    }

    /**
     * @return Audio
     */
    public function getAudio(): Audio
    {
        return $this->audio;
    }

    /**
     * @param Audio $audio
     */
    public function setAudio(Audio $audio)
    {
        $this->audio = $audio;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

    /**
     * @return Game
     */
    public function getGame(): Game
    {
        return $this->game;
    }

    /**
     * @param Game $game
     */
    public function setGame(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @param PhotoSize[] $photo
     */
    public function setPhoto(array $photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return Sticker
     */
    public function getSticker(): Sticker
    {
        return $this->sticker;
    }

    /**
     * @param Sticker $sticker
     */
    public function setSticker(Sticker $sticker)
    {
        $this->sticker = $sticker;
    }

    /**
     * @return Video
     */
    public function getVideo(): Video
    {
        return $this->video;
    }

    /**
     * @param Video $video
     */
    public function setVideo(Video $video)
    {
        $this->video = $video;
    }

    /**
     * @return Voice
     */
    public function getVoice(): Voice
    {
        return $this->voice;
    }

    /**
     * @param Voice $voice
     */
    public function setVoice(Voice $voice)
    {
        $this->voice = $voice;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption(string $caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }

    /**
     * @return Venue
     */
    public function getVenue(): Venue
    {
        return $this->venue;
    }

    /**
     * @param Venue $venue
     */
    public function setVenue(Venue $venue)
    {
        $this->venue = $venue;
    }

    /**
     * @return User
     */
    public function getNewChatMember(): User
    {
        return $this->new_chat_member;
    }

    /**
     * @param User $new_chat_member
     */
    public function setNewChatMember(User $new_chat_member)
    {
        $this->new_chat_member = $new_chat_member;
    }

    /**
     * @return User
     */
    public function getLeftChatMember(): User
    {
        return $this->left_chat_member;
    }

    /**
     * @param User $left_chat_member
     */
    public function setLeftChatMember(User $left_chat_member)
    {
        $this->left_chat_member = $left_chat_member;
    }

    /**
     * @return string
     */
    public function getNewChatTitle(): string
    {
        return $this->new_chat_title;
    }

    /**
     * @param string $new_chat_title
     */
    public function setNewChatTitle(string $new_chat_title)
    {
        $this->new_chat_title = $new_chat_title;
    }

    /**
     * @return PhotoSize[]
     */
    public function getNewChatPhoto(): array
    {
        return $this->new_chat_photo;
    }

    /**
     * @param PhotoSize[] $new_chat_photo
     */
    public function setNewChatPhoto(array $new_chat_photo)
    {
        $this->new_chat_photo = $new_chat_photo;
    }

    /**
     * @return boolean
     */
    public function isDeleteChatPhoto(): bool
    {
        return $this->delete_chat_photo;
    }

    /**
     * @param boolean $delete_chat_photo
     */
    public function setDeleteChatPhoto(bool $delete_chat_photo)
    {
        $this->delete_chat_photo = $delete_chat_photo;
    }

    /**
     * @return boolean
     */
    public function isGroupChatCreated(): bool
    {
        return $this->group_chat_created;
    }

    /**
     * @param boolean $group_chat_created
     */
    public function setGroupChatCreated(bool $group_chat_created)
    {
        $this->group_chat_created = $group_chat_created;
    }

    /**
     * @return boolean
     */
    public function isSupergroupChatCreated(): bool
    {
        return $this->supergroup_chat_created;
    }

    /**
     * @param boolean $supergroup_chat_created
     */
    public function setSupergroupChatCreated(bool $supergroup_chat_created)
    {
        $this->supergroup_chat_created = $supergroup_chat_created;
    }

    /**
     * @return boolean
     */
    public function isChannelChatCreated(): bool
    {
        return $this->channel_chat_created;
    }

    /**
     * @param boolean $channel_chat_created
     */
    public function setChannelChatCreated(bool $channel_chat_created)
    {
        $this->channel_chat_created = $channel_chat_created;
    }

    /**
     * @return int
     */
    public function getMigrateToChatId(): int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * @param int $migrate_to_chat_id
     */
    public function setMigrateToChatId(int $migrate_to_chat_id)
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
    }

    /**
     * @return int
     */
    public function getMigrateFromChatId(): int
    {
        return $this->migrate_from_chat_id;
    }

    /**
     * @param int $migrate_from_chat_id
     */
    public function setMigrateFromChatId(int $migrate_from_chat_id)
    {
        $this->migrate_from_chat_id = $migrate_from_chat_id;
    }

    /**
     * @return Message
     */
    public function getPinnedMessage(): Message
    {
        return $this->pinned_message;
    }

    /**
     * @param Message $pinned_message
     */
    public function setPinnedMessage(Message $pinned_message)
    {
        $this->pinned_message = $pinned_message;
    }


}
