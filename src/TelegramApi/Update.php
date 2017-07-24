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
     * @var int $update_id Unique identifier for this update
     */
    protected $update_id;

    /**
     * @var Message $message New incoming message of any kind — text, photo, sticker, etc.
     */
    protected $message;

    /**
     * @var Message $edited_message New version of a message that is known to the bot and was edited
     */
    protected $edited_message;

    /**
     * @var Message $channel_post New incoming channel post of any kind — text, photo, sticker, etc.
     */
    protected $channel_post;

    /**
     * @var Message $edited_channel_post New version of a channel post that is known to the bot and was edited
     */
    protected $edited_channel_post;

    /**
     * @var InlineQuery $inline_query New incoming inline query
     */
    protected $inline_query;

    /**
     * @var ChosenInlineResult The result of an inline query that was chosen by a user and sent to their chat partner.
     */
    protected $chosen_inline_result;

    /**
     * @var CallbackQuery $callback_query New incoming callback query
     */
    protected $callback_query;

    /**
     * @var ShippingQuery $shipping_query New incoming shipping query. Only for invoices with flexible price
     */
    protected $shipping_query;

    /**
     * @var PreCheckoutQuery $pre_checkout_query New incoming pre-checkout query. Contains full information about checkout
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
     */
    public function setUpdateId(int $update_id)
    {
        $this->update_id = $update_id;
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
     * @return Message
     */
    public function getEditedMessage(): Message
    {
        return $this->edited_message;
    }

    /**
     * @param Message $edited_message
     */
    public function setEditedMessage(Message $edited_message)
    {
        $this->edited_message = $edited_message;
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
     */
    public function setChannelPost(Message $channel_post)
    {
        $this->channel_post = $channel_post;
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
     */
    public function setEditedChannelPost(Message $edited_channel_post)
    {
        $this->edited_channel_post = $edited_channel_post;
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
     */
    public function setInlineQuery(InlineQuery $inline_query)
    {
        $this->inline_query = $inline_query;
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
     */
    public function setChosenInlineResult(ChosenInlineResult $chosen_inline_result)
    {
        $this->chosen_inline_result = $chosen_inline_result;
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
     */
    public function setCallbackQuery(CallbackQuery $callback_query)
    {
        $this->callback_query = $callback_query;
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
     */
    public function setShippingQuery(ShippingQuery $shipping_query)
    {
        $this->shipping_query = $shipping_query;
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
     */
    public function setPreCheckoutQuery(PreCheckoutQuery $pre_checkout_query)
    {
        $this->pre_checkout_query = $pre_checkout_query;
    }


}
