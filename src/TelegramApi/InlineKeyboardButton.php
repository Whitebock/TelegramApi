<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 *
 *
 * InlineKeyboardButton Class
 * This object represents one button of an inline keyboard. You must(!) use exactly one of the optional fields.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class InlineKeyboardButton
{
    /**
     * @var string Label text on the button
     */
    protected $text;

    /**
     * @var string HTTP url to be opened when button is pressed
     */
    protected $url;

    /**
     * @var string Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     */
    protected $callback_data;

    /**
     * @var string If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted
     */
    protected $switch_inline_query;

    /**
     * @var string If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot’s username will be inserted
     */
    protected $switch_inline_query_current_chat;

    /**
     * @var CallbackGame Description of the game that will be launched when the user presses the button <br><b>NOTE</b>: This type of button must always be the first button in the first row
     */
    protected $callback_game;

    /**
     * @var bool Specify True, to send a Pay button <br><b>NOTE</b>: This type of button must always be the first button in the first row
     */
    protected $pay;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return InlineKeyboardButton
     */
    public function setText(string $text): InlineKeyboardButton
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return InlineKeyboardButton
     */
    public function setUrl(string $url): InlineKeyboardButton
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackData(): string
    {
        return $this->callback_data;
    }

    /**
     * @param string $callback_data
     * @return InlineKeyboardButton
     */
    public function setCallbackData(string $callback_data): InlineKeyboardButton
    {
        $this->callback_data = $callback_data;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQuery(): string
    {
        return $this->switch_inline_query;
    }

    /**
     * @param string $switch_inline_query
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQuery(string $switch_inline_query): InlineKeyboardButton
    {
        $this->switch_inline_query = $switch_inline_query;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwitchInlineQueryCurrentChat(): string
    {
        return $this->switch_inline_query_current_chat;
    }

    /**
     * @param string $switch_inline_query_current_chat
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQueryCurrentChat(string $switch_inline_query_current_chat): InlineKeyboardButton
    {
        $this->switch_inline_query_current_chat = $switch_inline_query_current_chat;
        return $this;
    }

    /**
     * @return CallbackGame
     */
    public function getCallbackGame(): CallbackGame
    {
        return $this->callback_game;
    }

    /**
     * @param CallbackGame $callback_game
     * @return InlineKeyboardButton
     */
    public function setCallbackGame(CallbackGame $callback_game): InlineKeyboardButton
    {
        $this->callback_game = $callback_game;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPay(): bool
    {
        return $this->pay;
    }

    /**
     * @param boolean $pay
     * @return InlineKeyboardButton
     */
    public function setPay(bool $pay): InlineKeyboardButton
    {
        $this->pay = $pay;
        return $this;
    }
}
