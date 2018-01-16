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
 * This object represent a user's profile pictures.
 *
 * @see https://core.telegram.org/bots/api#userprofilephotos Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class UserProfilePhotos
{
    /**
     * var int Total number of profile pictures the target user has
     */
    protected $total_count;

    /**
     * @var Photo[][] Requested profile pictures (in up to 4 sizes each)
     */
    protected $photos;

    /**
     * @return mixed
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * @return Photo[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
}
