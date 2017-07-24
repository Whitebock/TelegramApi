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
 * @ORM\Entity()
 */
class User
{
    /**
     * @var int $id Unique identifier for this user or bot
     */
    protected $id;

    /**
     * @var string $first_name User‘s or bot’s first name
     */
    protected $first_name;

    /**
     * @var string $last_name User‘s or bot’s last name
     */
    protected $last_name;
    /**
     * @var string $username User‘s or bot’s username
     */
    protected $username;

    /**
     * @var string $language_code IETF language tag of the user's language
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
     * @param int $id
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;
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
     * @return User
     */
    public function setFirstName(string $first_name): User
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
     * @return User
     */
    public function setLastName(string $last_name): User
    {
        $this->last_name = $last_name;
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
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->language_code;
    }

    /**
     * @param string $language_code
     * @return User
     */
    public function setLanguageCode(string $language_code): User
    {
        $this->language_code = $language_code;
        return $this;
    }


}
