<?php

namespace Whitebock\TelegramApi;

use Whitebock\TelegramApi\Sticker\Sticker;

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
     * @var string Unique message identifier
     */
    protected $id;

    /**
     * @var User Optional. Sender, can be empty for messages sent to channels
     */
    protected $from;

    /**
     * @var int Date the message was sent in Unix time
     */
    protected $date;

    /**
     * @var Chat Conversation the message belongs to
     */
    protected $chat;

    /**
     * @var User For forwarded messages, sender of the original message
     */
    protected $forward_from;

    /**
     * @var Chat For messages forwarded from a channel, information about the original channel
     */
    protected $forward_from_chat;

    /**
     * @var int For forwarded channel posts, identifier of the original message in the channel
     */
    protected $forward_from_message_id;

    /**
     * @var int For forwarded messages, date the original message was sent in Unix time
     */
    protected $forward_date;

    /**
     * @var Message For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    protected $reply_to_message;

    /**
     * @var int Date the message was last edited in Unix time
     */
    protected $edit_date;

    /**
     * @var string For text messages, the actual UTF-8 text of the message, 0-4096 characters.
     */
    protected $text;

    /**
     * @var MessageEntity[] For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     */
    protected $entities;

    /**
     * @var Audio Message is an audio file, information about the file
     */
    protected $audio;

    /**
     * @var Document Message is a general file, information about the file
     */
    protected $document;

    /**
     * @var Game Message is a game, information about the game.
     */
    protected $game;

    /**
     * @var Photo[] Message is a photo, available sizes of the photo
     */
    protected $photo;

    /**
     * @var Sticker Message is a sticker, information about the sticker
     */
    protected $sticker;

    /**
     * @var Video Message is a video, information about the video
     */
    protected $video;

    /**
     * @var Voice Message is a voice message, information about the file
     */
    protected $voice;

    /**
     * @var VideoNote Message is a video note, information about the video message
     */
    protected $video_note;

    /**
     * @var User[] New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     */
    protected $new_chat_members;

    /**
     * @var string Caption for the document, photo or video, 0-200 characters
     */
    protected $caption;

    /**
     * @var Contact Message is a shared contact, information about the contact
     */
    protected $contact;

    /**
     * @var Location Message is a shared location, information about the location
     */
    protected $location;

    /**
     * @var Venue Message is a venue, information about the venue
     */
    protected $venue;

    /**
     * @var User A new member was added to the group, information about them (this member may be the bot itself)
     */
    protected $new_chat_member;

    /**
     * @var User A member was removed from the group, information about them (this member may be the bot itself)
     */
    protected $left_chat_member;

    /**
     * @var string A chat title was changed to this value
     */
    protected $new_chat_title;

    /**
     * @var Photo[] A chat photo was changed to this value
     */
    protected $new_chat_photo;

    /**
     * @var bool Service message: the chat photo was deleted
     */
    protected $delete_chat_photo;

    /**
     * @var bool Service message: the group has been created
     */
    protected $group_chat_created;

    /**
     * @var bool Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    protected $supergroup_chat_created;

    /**
     * @var bool Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    protected $channel_chat_created;

    /**
     * @var int The group has been migrated to a supergroup with the specified identifier.
     */
    protected $migrate_to_chat_id;

    /**
     * @var int The supergroup has been migrated from a group with the specified identifier.
     */
    protected $migrate_from_chat_id;

    /**
     * @var Message Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    protected $pinned_message;

    /**
     * @var Invoice Message is an invoice for a payment, information about the invoice
     */
    protected $invoice;

    /**
     * @var SuccessfulPayment Message is a service message about a successful payment, information about the payment
     */
    protected $successful_payment;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Message
     */
    public function setId(string $id): Message
    {
        $this->id = $id;
        return $this;
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
     * @return Message
     */
    public function setFrom(User $from): Message
    {
        $this->from = $from;
        return $this;
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
     * @return Message
     */
    public function setDate(int $date): Message
    {
        $this->date = $date;
        return $this;
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
     * @return Message
     */
    public function setChat(Chat $chat): Message
    {
        $this->chat = $chat;
        return $this;
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
     * @return Message
     */
    public function setForwardFrom(User $forward_from): Message
    {
        $this->forward_from = $forward_from;
        return $this;
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
     * @return Message
     */
    public function setForwardFromChat(Chat $forward_from_chat): Message
    {
        $this->forward_from_chat = $forward_from_chat;
        return $this;
    }

    /**
     * @return int
     */
    public function getForwardFromMessageId(): int
    {
        return $this->forward_from_message_id;
    }

    /**
     * @param int $forward_from_message_id
     * @return Message
     */
    public function setForwardFromMessageId(int $forward_from_message_id): Message
    {
        $this->forward_from_message_id = $forward_from_message_id;
        return $this;
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
     * @return Message
     */
    public function setForwardDate(int $forward_date): Message
    {
        $this->forward_date = $forward_date;
        return $this;
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
     * @return Message
     */
    public function setReplyToMessage(Message $reply_to_message): Message
    {
        $this->reply_to_message = $reply_to_message;
        return $this;
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
     * @return Message
     */
    public function setEditDate(int $edit_date): Message
    {
        $this->edit_date = $edit_date;
        return $this;
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
     * @return Message
     */
    public function setText(string $text): Message
    {
        $this->text = $text;
        return $this;
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
     * @return Message
     */
    public function setEntities(array $entities): Message
    {
        $this->entities = $entities;
        return $this;
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
     * @return Message
     */
    public function setAudio(Audio $audio): Message
    {
        $this->audio = $audio;
        return $this;
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
     * @return Message
     */
    public function setDocument(Document $document): Message
    {
        $this->document = $document;
        return $this;
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
     * @return Message
     */
    public function setGame(Game $game): Message
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return Photo[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * @param Photo[] $photo
     * @return Message
     */
    public function setPhoto(array $photo): Message
    {
        $this->photo = $photo;
        return $this;
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
     * @return Message
     */
    public function setSticker(Sticker $sticker): Message
    {
        $this->sticker = $sticker;
        return $this;
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
     * @return Message
     */
    public function setVideo(Video $video): Message
    {
        $this->video = $video;
        return $this;
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
     * @return Message
     */
    public function setVoice(Voice $voice): Message
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * @return VideoNote
     */
    public function getVideoNote(): VideoNote
    {
        return $this->video_note;
    }

    /**
     * @param VideoNote $video_note
     * @return Message
     */
    public function setVideoNote(VideoNote $video_note): Message
    {
        $this->video_note = $video_note;
        return $this;
    }

    /**
     * @return User[]
     */
    public function getNewChatMembers(): array
    {
        return $this->new_chat_members;
    }

    /**
     * @param User[] $new_chat_members
     * @return Message
     */
    public function setNewChatMembers(array $new_chat_members): Message
    {
        $this->new_chat_members = $new_chat_members;
        return $this;
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
     * @return Message
     */
    public function setCaption(string $caption): Message
    {
        $this->caption = $caption;
        return $this;
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
     * @return Message
     */
    public function setContact(Contact $contact): Message
    {
        $this->contact = $contact;
        return $this;
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
     * @return Message
     */
    public function setLocation(Location $location): Message
    {
        $this->location = $location;
        return $this;
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
     * @return Message
     */
    public function setVenue(Venue $venue): Message
    {
        $this->venue = $venue;
        return $this;
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
     * @return Message
     */
    public function setNewChatMember(User $new_chat_member): Message
    {
        $this->new_chat_member = $new_chat_member;
        return $this;
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
     * @return Message
     */
    public function setLeftChatMember(User $left_chat_member): Message
    {
        $this->left_chat_member = $left_chat_member;
        return $this;
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
     * @return Message
     */
    public function setNewChatTitle(string $new_chat_title): Message
    {
        $this->new_chat_title = $new_chat_title;
        return $this;
    }

    /**
     * @return Photo[]
     */
    public function getNewChatPhoto(): array
    {
        return $this->new_chat_photo;
    }

    /**
     * @param Photo[] $new_chat_photo
     * @return Message
     */
    public function setNewChatPhoto(array $new_chat_photo): Message
    {
        $this->new_chat_photo = $new_chat_photo;
        return $this;
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
     * @return Message
     */
    public function setDeleteChatPhoto(bool $delete_chat_photo): Message
    {
        $this->delete_chat_photo = $delete_chat_photo;
        return $this;
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
     * @return Message
     */
    public function setGroupChatCreated(bool $group_chat_created): Message
    {
        $this->group_chat_created = $group_chat_created;
        return $this;
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
     * @return Message
     */
    public function setSupergroupChatCreated(bool $supergroup_chat_created): Message
    {
        $this->supergroup_chat_created = $supergroup_chat_created;
        return $this;
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
     * @return Message
     */
    public function setChannelChatCreated(bool $channel_chat_created): Message
    {
        $this->channel_chat_created = $channel_chat_created;
        return $this;
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
     * @return Message
     */
    public function setMigrateToChatId(int $migrate_to_chat_id): Message
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
        return $this;
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
     * @return Message
     */
    public function setMigrateFromChatId(int $migrate_from_chat_id): Message
    {
        $this->migrate_from_chat_id = $migrate_from_chat_id;
        return $this;
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
     * @return Message
     */
    public function setPinnedMessage(Message $pinned_message): Message
    {
        $this->pinned_message = $pinned_message;
        return $this;
    }

    /**
     * @return Invoice
     */
    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    /**
     * @param Invoice $invoice
     * @return Message
     */
    public function setInvoice(Invoice $invoice): Message
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * @return SuccessfulPayment
     */
    public function getSuccessfulPayment(): SuccessfulPayment
    {
        return $this->successful_payment;
    }

    /**
     * @param SuccessfulPayment $successful_payment
     * @return Message
     */
    public function setSuccessfulPayment(SuccessfulPayment $successful_payment): Message
    {
        $this->successful_payment = $successful_payment;
        return $this;
    }
}