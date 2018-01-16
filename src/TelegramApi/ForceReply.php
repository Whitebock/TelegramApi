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
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot‘s message and tapped ’Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @see https://core.telegram.org/bots/api#forcereply Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
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
