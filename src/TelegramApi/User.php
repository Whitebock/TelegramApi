<?php

/*
 * This file is part of the Telegram Bot API wrapper.
 *
 * (c) Sven Drewniok <sven.drewniok@web.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Whitebock\TelegramApi;

/**
 * This object represents a Telegram user or bot.
 *
 * @see https://core.telegram.org/bots/api#user Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class User
{
    /**
     * @var int Unique identifier for this user or bot
     */
    protected $id;

    /**
     * @var string User‘s or bot’s first name
     */
    protected $first_name;

    /**
     * @var string User‘s or bot’s last name
     */
    protected $last_name;

    /**
     * @var string User‘s or bot’s username
     */
    protected $username;

    /**
     * @var string IETF language tag of the user's language
     */
    protected $language_code;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->language_code;
    }
}
