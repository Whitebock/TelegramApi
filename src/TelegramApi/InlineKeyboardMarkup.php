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
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * @see https://core.telegram.org/bots/api#inlinekeyboardmarkup Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class InlineKeyboardMarkup
{
    /**
     * @var InlineKeyboardButton[][] Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    protected $inline_keyboard;

    /**
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inline_keyboard;
    }

    /**
     * @param InlineKeyboardButton[][] $inline_keyboard
     * @return InlineKeyboardMarkup
     */
    public function setInlineKeyboard(array $inline_keyboard): InlineKeyboardMarkup
    {
        $this->inline_keyboard = $inline_keyboard;
        return $this;
    }
}
