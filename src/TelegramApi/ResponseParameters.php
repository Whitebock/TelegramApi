<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#responseparameters
 *
 * ResponseParameters Class
 * Contains information about why a request was unsuccessfull.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ResponseParameters
{
    /**
     * @var int $migrate_to_chat_id Optional. The group has been migrated to a supergroup with the specified identifier.
     */
    protected $migrate_to_chat_id;

    /**
     * @var int $retry_after Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
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
     * @param int $migrate_to_chat_id
     */
    public function setMigrateToChatId(int $migrate_to_chat_id)
    {
        $this->migrate_to_chat_id = $migrate_to_chat_id;
    }

    /**
     * @return int
     */
    public function getRetryAfter(): int
    {
        return $this->retry_after;
    }

    /**
     * @param int $retry_after
     */
    public function setRetryAfter(int $retry_after)
    {
        $this->retry_after = $retry_after;
    }


}