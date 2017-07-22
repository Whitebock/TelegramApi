<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#callbackquery
 *
 * CallbackQuery Class
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class CallbackQuery
{
    /**
     * @var string $id Unique identifier for this query
     */
    protected $id;

    /**
     * @var User $from Sender
     */
    protected $from;

    /**
     * @var Message $message Optional. Message with the callback button that originated the query. <br>Note that message content and message date will not be available if the message is too old
     */
    protected $message;

    /**
     * @var string $inline_message_id Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    protected $inline_message_id;

    /**
     * @var string $chat_instance Identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    protected $chat_instance;

    /**
     * @var string $data Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     */
    protected $data;

    /**
     * @var string $game_short_name Optional. Short name of a Game to be returned, serves as the unique identifier for the game
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
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from)
    {
        $this->from = $from;
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
     */
    public function setMessage(Message $message)
    {
        $this->message = $message;
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
     */
    public function setInlineMessageId(string $inline_message_id)
    {
        $this->inline_message_id = $inline_message_id;
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
     */
    public function setChatInstance(string $chat_instance)
    {
        $this->chat_instance = $chat_instance;
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
     */
    public function setData(string $data)
    {
        $this->data = $data;
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
     */
    public function setGameShortName(string $game_short_name)
    {
        $this->game_short_name = $game_short_name;
    }


}
