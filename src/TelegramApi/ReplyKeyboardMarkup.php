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
 * This object represents a custom keyboard with reply options
 *
 * @see https://core.telegram.org/bots/api#replykeyboardmarkup Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class ReplyKeyboardMarkup
{
    /**
     * @var KeyboardButton[][] Array of button rows, each represented by an Array of KeyboardButton objects
     */
    protected $keyboard;

    /**
     * @var bool Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    protected $resize_keyboard;

    /**
     * @var bool Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
     */
    protected $one_time_keyboard;

    /**
     * @var bool Use this parameter if you want to show the keyboard to specific users only. Targets: <ol><li>Users that are @mentioned in the text of the Message object</li> <li>If the bot's message is a reply (has reply_to_message_id), sender of the original message</li></ol>
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
     * @return ReplyKeyboardMarkup
     */
    public function setKeyboard(array $keyboard): ReplyKeyboardMarkup
    {
        $this->keyboard = $keyboard;
        return $this;
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
     * @return ReplyKeyboardMarkup
     */
    public function setResizeKeyboard(bool $resize_keyboard): ReplyKeyboardMarkup
    {
        $this->resize_keyboard = $resize_keyboard;
        return $this;
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
     * @return ReplyKeyboardMarkup
     */
    public function setOneTimeKeyboard(bool $one_time_keyboard): ReplyKeyboardMarkup
    {
        $this->one_time_keyboard = $one_time_keyboard;
        return $this;
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
     * @return ReplyKeyboardMarkup
     */
    public function setSelective(bool $selective): ReplyKeyboardMarkup
    {
        $this->selective = $selective;
        return $this;
    }
}
