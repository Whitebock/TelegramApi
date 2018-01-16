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
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this object to specify text of the button. Optional fields are mutually exclusive.
 *
 * @see https://core.telegram.org/bots/api#keyboardbutton Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class KeyboardButton
{
    /**
     * @var string Text of the button. If none of the optional fields are used, it will be sent to the bot as a message when the button is pressed
     */
    protected $text;

    /**
     * @var bool If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
     */
    protected $request_contact;

    /**
     * @var bool If True, the user's current location will be sent when the button is pressed. Available in private chats only
     */
    protected $request_location;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return KeyboardButton
     */
    public function setText(string $text): KeyboardButton
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isRequestContact(): bool
    {
        return $this->request_contact;
    }

    /**
     * @param boolean $request_contact
     * @return KeyboardButton
     */
    public function setRequestContact(bool $request_contact): KeyboardButton
    {
        $this->request_contact = $request_contact;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isRequestLocation(): bool
    {
        return $this->request_location;
    }

    /**
     * @param boolean $request_location
     * @return KeyboardButton
     */
    public function setRequestLocation(bool $request_location): KeyboardButton
    {
        $this->request_location = $request_location;
        return $this;
    }
}
