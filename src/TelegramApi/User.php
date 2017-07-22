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

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


}
