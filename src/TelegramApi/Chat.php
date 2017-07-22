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
     * @var int $id Unique identifier for this chat.
     */
    protected $id;

    /**
     * @var string $type Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    protected $type;

    /**
     * @var string $title Optional. Title, for supergroups, channels and group chats
     */
    protected $title;

    /**
     * @var string $username Optional. Username, for private chats, supergroups and channels if available
     */
    protected $username;

    /**
     * @var string $first_name Optional. First name of the other party in a private chat
     */
    protected $first_name;

    /**
     * @var string $last_name Optional. Last name of the other party in a private chat
     */
    protected $last_name;

    /**
     * @var bool $all_members_are_administrators Optional. True if a group has ‘All Members Are Admins’ enabled.
     */
    protected $all_members_are_administrators;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
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
     */
    public function setType(string $type)
    {
        $this->type = $type;
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
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
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
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
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
     */
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
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
     */
    public function setLastName(string $last_name)
    {
        $this->last_name = $last_name;
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
     */
    public function setAllMembersAreAdministrators(bool $all_members_are_administrators)
    {
        $this->all_members_are_administrators = $all_members_are_administrators;
    }


}
