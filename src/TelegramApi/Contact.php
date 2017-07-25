<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#contact
 *
 * Contact Class
 * This object represents a phone contact.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Contact
{
    /**
     * @var string Contact's phone number
     */
    protected $phone_number;

    /**
     * @var string Contact's first name
     */
    protected $first_name;

    /**
     * @var string Contact's last name
     */
    protected $last_name;

    /**
     * @var int Contact's user identifier in Telegram
     */
    protected $user_id;

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     * @return Contact
     */
    public function setPhoneNumber(string $phone_number): Contact
    {
        $this->phone_number = $phone_number;
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
     * @return Contact
     */
    public function setFirstName(string $first_name): Contact
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
     * @return Contact
     */
    public function setLastName(string $last_name): Contact
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return Contact
     */
    public function setUserId(int $user_id): Contact
    {
        $this->user_id = $user_id;
        return $this;
    }
}
