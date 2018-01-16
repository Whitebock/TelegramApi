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
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @see https://core.telegram.org/bots/api#callbackquery Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class CallbackQuery
{
    /**
     * @var string Unique identifier for this query
     */
    protected $id;

    /**
     * @var User Sender
     */
    protected $from;

    /**
     * @var Message Message with the callback button that originated the query. <br>Note that message content and message date will not be available if the message is too old
     */
    protected $message;

    /**
     * @var string Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    protected $inline_message_id;

    /**
     * @var string Identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    protected $chat_instance;

    /**
     * @var string Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     */
    protected $data;

    /**
     * @var string Short name of a Game to be returned, serves as the unique identifier for the game
     */
    protected $game_short_name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return CallbackQuery
     */
    public function setId(string $id): CallbackQuery
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     * @return CallbackQuery
     */
    public function setFrom(User $from): CallbackQuery
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @param Message $message
     * @return CallbackQuery
     */
    public function setMessage(Message $message): CallbackQuery
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getInlineMessageId(): string
    {
        return $this->inline_message_id;
    }

    /**
     * @param string $inline_message_id
     * @return CallbackQuery
     */
    public function setInlineMessageId(string $inline_message_id): CallbackQuery
    {
        $this->inline_message_id = $inline_message_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getChatInstance(): string
    {
        return $this->chat_instance;
    }

    /**
     * @param string $chat_instance
     * @return CallbackQuery
     */
    public function setChatInstance(string $chat_instance): CallbackQuery
    {
        $this->chat_instance = $chat_instance;
        return $this;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     * @return CallbackQuery
     */
    public function setData(string $data): CallbackQuery
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameShortName(): string
    {
        return $this->game_short_name;
    }

    /**
     * @param string $game_short_name
     * @return CallbackQuery
     */
    public function setGameShortName(string $game_short_name): CallbackQuery
    {
        $this->game_short_name = $game_short_name;
        return $this;
    }
}
