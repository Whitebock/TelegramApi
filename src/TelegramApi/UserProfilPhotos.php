<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#userprofilephotos
 *
 * UserProfilePhotos Class
 * This object represent a user's profile pictures.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
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
