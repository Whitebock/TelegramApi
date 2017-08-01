<?php
namespace Whitebock\TelegramApi;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#user
 *
 * User Class
 * This object represents a Telegram user or bot.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
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
