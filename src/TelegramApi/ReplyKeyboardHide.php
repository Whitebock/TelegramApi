<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#replykeyboardhide
 *
 * ReplyKeyboardHide Class
 * Upon receiving a message with this object, Telegram clients will hide the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see ReplyKeyboardMarkup).
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ReplyKeyboardHide
{
    /**
     * @var bool $hide_keyboard Requests clients to hide the custom keyboard
     */
    protected $hide_keyboard;

    /**
     * @var bool $selective Optional. Use this parameter if you want to hide keyboard for specific users only. Targets: <ol><li>users that are @mentioned in the text of the Message object;</li><li>if the bot's message is a reply (has reply_to_message_id), sender of the original message.</li></ol>
     */
    protected $selective;

    /**
     * @return boolean
     */
    public function isHideKeyboard(): bool
    {
        return $this->hide_keyboard;
    }

    /**
     * @param boolean $hide_keyboard
     */
    public function setHideKeyboard(bool $hide_keyboard)
    {
        $this->hide_keyboard = $hide_keyboard;
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
