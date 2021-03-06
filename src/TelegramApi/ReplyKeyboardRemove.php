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
 * Upon receiving a message with this object, Telegram clients will hide the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see ReplyKeyboardMarkup).
 *
 * @see https://core.telegram.org/bots/api#replykeyboardhide Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class ReplyKeyboardRemove
{
    /**
     * @var bool Requests clients to hide the custom keyboard
     */
    protected $remove_keyboard = true;

    /**
     * @var bool Use this parameter if you want to hide keyboard for specific users only. Targets: <ol><li>users that are @mentioned in the text of the Message object;</li><li>if the bot's message is a reply (has reply_to_message_id), sender of the original message.</li></ol>
     */
    protected $selective;

    /**
     * @return boolean
     */
    public function isRemoveKeyboard(): bool
    {
        return $this->remove_keyboard;
    }

    /**
     * @param boolean $remove_keyboard
     * @return ReplyKeyboardRemove
     */
    public function setRemoveKeyboard(bool $remove_keyboard): ReplyKeyboardRemove
    {
        $this->remove_keyboard = $remove_keyboard;
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
     * @return ReplyKeyboardRemove
     */
    public function setSelective(bool $selective): ReplyKeyboardRemove
    {
        $this->selective = $selective;
        return $this;
    }
}
