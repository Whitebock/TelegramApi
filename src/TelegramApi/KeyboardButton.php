<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#keyboardbutton
 *
 * KeyboardButton Class
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this object to specify text of the button. Optional fields are mutually exclusive.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class KeyboardButton
{
    /**
     * @var string $text Text of the button. If none of the optional fields are used, it will be sent to the bot as a message when the button is pressed
     */
    protected $text;

    /**
     * @var bool $request_contact Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
     */
    protected $request_contact;

    /**
     * @var bool $request_location Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only
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
     */
    public function setText(string $text)
    {
        $this->text = $text;
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
     */
    public function setRequestContact(bool $request_contact)
    {
        $this->request_contact = $request_contact;
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
     */
    public function setRequestLocation(bool $request_location)
    {
        $this->request_location = $request_location;
    }


}
