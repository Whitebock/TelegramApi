<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */

class Update
{
    /**
     * @var int Unique identifier for this update
     */
    protected $update_id;

    /**
     * @var Message New incoming message of any kind — text, photo, sticker, etc.
     */
    protected $message;

    /**
     * @var Message New version of a message that is known to the bot and was edited
     */
    protected $edited_message;

    /**
     * @var Message New incoming channel post of any kind — text, photo, sticker, etc.
     */
    protected $channel_post;

    /**
     * @var Message New version of a channel post that is known to the bot and was edited
     */
    protected $edited_channel_post;

    /**
     * @var InlineQuery New incoming inline query
     */
    protected $inline_query;

    /**
     * @var ChosenInlineResult The result of an inline query that was chosen by a user and sent to their chat partner.
     */
    protected $chosen_inline_result;

    /**
     * @var CallbackQuery New incoming callback query
     */
    protected $callback_query;

    /**
     * @var ShippingQuery New incoming shipping query. Only for invoices with flexible price
     */
    protected $shipping_query;

    /**
     * @var PreCheckoutQuery New incoming pre-checkout query. Contains full information about checkout
     */
    protected $pre_checkout_query;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->update_id;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @return Message
     */
    public function getEditedMessage(): Message
    {
        return $this->edited_message;
    }

    /**
     * @return Message
     */
    public function getChannelPost(): Message
    {
        return $this->channel_post;
    }

    /**
     * @return Message
     */
    public function getEditedChannelPost(): Message
    {
        return $this->edited_channel_post;
    }

    /**
     * @return InlineQuery
     */
    public function getInlineQuery(): InlineQuery
    {
        return $this->inline_query;
    }

    /**
     * @return ChosenInlineResult
     */
    public function getChosenInlineResult(): ChosenInlineResult
    {
        return $this->chosen_inline_result;
    }

    /**
     * @return CallbackQuery
     */
    public function getCallbackQuery(): CallbackQuery
    {
        return $this->callback_query;
    }

    /**
     * @return ShippingQuery
     */
    public function getShippingQuery(): ShippingQuery
    {
        return $this->shipping_query;
    }

    /**
     * @return PreCheckoutQuery
     */
    public function getPreCheckoutQuery(): PreCheckoutQuery
    {
        return $this->pre_checkout_query;
    }
}
