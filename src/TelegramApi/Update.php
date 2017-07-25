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
    public function getUpdateId(): int
    {
        return $this->update_id;
    }

    /**
     * @param int $update_id
     * @return Update
     */
    public function setUpdateId(int $update_id): Update
    {
        $this->update_id = $update_id;
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
     * @return Update
     */
    public function setMessage(Message $message): Update
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return Message
     */
    public function getEditedMessage(): Message
    {
        return $this->edited_message;
    }

    /**
     * @param Message $edited_message
     * @return Update
     */
    public function setEditedMessage(Message $edited_message): Update
    {
        $this->edited_message = $edited_message;
        return $this;
    }

    /**
     * @return Message
     */
    public function getChannelPost(): Message
    {
        return $this->channel_post;
    }

    /**
     * @param Message $channel_post
     * @return Update
     */
    public function setChannelPost(Message $channel_post): Update
    {
        $this->channel_post = $channel_post;
        return $this;
    }

    /**
     * @return Message
     */
    public function getEditedChannelPost(): Message
    {
        return $this->edited_channel_post;
    }

    /**
     * @param Message $edited_channel_post
     * @return Update
     */
    public function setEditedChannelPost(Message $edited_channel_post): Update
    {
        $this->edited_channel_post = $edited_channel_post;
        return $this;
    }

    /**
     * @return InlineQuery
     */
    public function getInlineQuery(): InlineQuery
    {
        return $this->inline_query;
    }

    /**
     * @param InlineQuery $inline_query
     * @return Update
     */
    public function setInlineQuery(InlineQuery $inline_query): Update
    {
        $this->inline_query = $inline_query;
        return $this;
    }

    /**
     * @return ChosenInlineResult
     */
    public function getChosenInlineResult(): ChosenInlineResult
    {
        return $this->chosen_inline_result;
    }

    /**
     * @param ChosenInlineResult $chosen_inline_result
     * @return Update
     */
    public function setChosenInlineResult(ChosenInlineResult $chosen_inline_result): Update
    {
        $this->chosen_inline_result = $chosen_inline_result;
        return $this;
    }

    /**
     * @return CallbackQuery
     */
    public function getCallbackQuery(): CallbackQuery
    {
        return $this->callback_query;
    }

    /**
     * @param CallbackQuery $callback_query
     * @return Update
     */
    public function setCallbackQuery(CallbackQuery $callback_query): Update
    {
        $this->callback_query = $callback_query;
        return $this;
    }

    /**
     * @return ShippingQuery
     */
    public function getShippingQuery(): ShippingQuery
    {
        return $this->shipping_query;
    }

    /**
     * @param ShippingQuery $shipping_query
     * @return Update
     */
    public function setShippingQuery(ShippingQuery $shipping_query): Update
    {
        $this->shipping_query = $shipping_query;
        return $this;
    }

    /**
     * @return PreCheckoutQuery
     */
    public function getPreCheckoutQuery(): PreCheckoutQuery
    {
        return $this->pre_checkout_query;
    }

    /**
     * @param PreCheckoutQuery $pre_checkout_query
     * @return Update
     */
    public function setPreCheckoutQuery(PreCheckoutQuery $pre_checkout_query): Update
    {
        $this->pre_checkout_query = $pre_checkout_query;
        return $this;
    }
}
