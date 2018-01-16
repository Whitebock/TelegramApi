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
 * This object represents a chat photo.
 *
 * @see https://core.telegram.org/bots/api#chatphoto Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
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