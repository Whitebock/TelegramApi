<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#forcereply
 *
 * ForceReply Class
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot‘s message and tapped ’Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ForceReply
{
    /**
     * @var bool Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply'
     */
    protected $force_reply = true;

    /**
     * @var bool Use this parameter if you want to force reply from specific users only. Targets: <ol><li>users that are @mentioned in the text of the Message object;</li><li>if the bot's message is a reply (has reply_to_message_id), sender of the original message.</li></ol>
     */
    protected $selective;

    /**
     * @return boolean
     */
    public function isForceReply(): bool
    {
        return $this->force_reply;
    }

    /**
     * @param boolean $force_reply
     * @return ForceReply
     */
    public function setForceReply(bool $force_reply): ForceReply
    {
        $this->force_reply = $force_reply;
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
     * @return ForceReply
     */
    public function setSelective(bool $selective): ForceReply
    {
        $this->selective = $selective;
        return $this;
    }
}
