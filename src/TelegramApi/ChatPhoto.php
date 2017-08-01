<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#forcereply
 *
 * ChatPhoto Class
 * This object represents a chat photo.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ChatPhoto
{
    /**
     * @var string Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
     */
    protected $small_file_id;

    /**
     * @var string Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
     */
    protected $big_file_id;

    /**
     * @return string
     */
    public function getSmallFileId(): string
    {
        return $this->small_file_id;
    }

    /**
     * @return string
     */
    public function getBigFileId(): string
    {
        return $this->big_file_id;
    }
}