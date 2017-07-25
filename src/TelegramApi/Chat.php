<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#chat
 *
 * Chat Class
 * This object represents a chat.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Chat
{
    /**
     * @var int Unique identifier for this chat.
     */
    protected $id;

    /**
     * @var string Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    protected $type;

    /**
     * @var string Title, for supergroups, channels and group chats
     */
    protected $title;

    /**
     * @var string Username, for private chats, supergroups and channels if available
     */
    protected $username;

    /**
     * @var string First name of the other party in a private chat
     */
    protected $first_name;

    /**
     * @var string Last name of the other party in a private chat
     */
    protected $last_name;

    /**
     * @var bool True if a group has ‘All Members Are Admins’ enabled
     */
    protected $all_members_are_administrators;

    /**
     * @var string Description, for supergroups and channel chats
     */
    protected $description;

    /**
     * @var string Chat invite link, for supergroups and channel chats
     */
    protected $invite_link;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Chat
     */
    public function setId(int $id): Chat
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Chat
     */
    public function setType(string $type): Chat
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Chat
     */
    public function setTitle(string $title): Chat
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Chat
     */
    public function setUsername(string $username): Chat
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return Chat
     */
    public function setFirstName(string $first_name): Chat
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return Chat
     */
    public function setLastName(string $last_name): Chat
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAllMembersAreAdministrators(): bool
    {
        return $this->all_members_are_administrators;
    }

    /**
     * @param boolean $all_members_are_administrators
     * @return Chat
     */
    public function setAllMembersAreAdministrators(bool $all_members_are_administrators): Chat
    {
        $this->all_members_are_administrators = $all_members_are_administrators;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Chat
     */
    public function setDescription(string $description): Chat
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->invite_link;
    }

    /**
     * @param string $invite_link
     * @return Chat
     */
    public function setInviteLink(string $invite_link): Chat
    {
        $this->invite_link = $invite_link;
        return $this;
    }
}
