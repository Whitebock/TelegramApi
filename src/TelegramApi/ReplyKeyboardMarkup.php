<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#replykeyboardmarkup
 *
 * ReplyKeyboardMarkup Class
 * This object represents a custom keyboard with reply options
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ReplyKeyboardMarkup
{
    /**
     * @var KeyboardButton[][] $keyboard Array of button rows, each represented by an Array of KeyboardButton objects
     */
    protected $keyboard;

    /**
     * @var bool $resize_keyboard Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    protected $resize_keyboard;

    /**
     * @var bool $one_time_keyboard Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
     */
    protected $one_time_keyboard;

    /**
     * @var bool $selective Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: <ol><li>users that are @mentioned in the text of the Message object;</li> <li>if the bot's message is a reply (has reply_to_message_id), sender of the original message.</li></ol>
     */
    protected $selective;

    /**
     * @return KeyboardButton[][]
     */
    public function getKeyboard(): array
    {
        return $this->keyboard;
    }

    /**
     * @param KeyboardButton[][] $keyboard
     */
    public function setKeyboard(array $keyboard)
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @return boolean
     */
    public function isResizeKeyboard(): bool
    {
        return $this->resize_keyboard;
    }

    /**
     * @param boolean $resize_keyboard
     */
    public function setResizeKeyboard(bool $resize_keyboard)
    {
        $this->resize_keyboard = $resize_keyboard;
    }

    /**
     * @return boolean
     */
    public function isOneTimeKeyboard(): bool
    {
        return $this->one_time_keyboard;
    }

    /**
     * @param boolean $one_time_keyboard
     */
    public function setOneTimeKeyboard(bool $one_time_keyboard)
    {
        $this->one_time_keyboard = $one_time_keyboard;
    }

    /**
     * @return boolean
     */
    public function isSelective(): bool
    {
        return $this->selective;
    }

    /**
     * @param boolean $selective
     */
    public function setSelective(bool $selective)
    {
        $this->selective = $selective;
    }


}
