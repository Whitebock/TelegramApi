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
 * Contains information about why a request was unsuccessfull.
 *
 * @see https://core.telegram.org/bots/api#responseparameters Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class ResponseParameters
{
    /**
     * @var int The group has been migrated to a supergroup with the specified identifier.
     */
    protected $migrate_to_chat_id;

    /**
     * @var int In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     */
    protected $retry_after;

    /**
     * @return int
     */
    public function getMigrateToChatId(): int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * @return int
     */
    public function getRetryAfter(): int
    {
        return $this->retry_after;
    }
}
