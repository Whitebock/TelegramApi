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
     * @var PhotoSize[][] Requested profile pictures (in up to 4 sizes each)
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
     * @param mixed $total_count
     * @return UserProfilePhotos
     */
    public function setTotalCount($total_count)
    {
        $this->total_count = $total_count;
        return $this;
    }

    /**
     * @return PhotoSize[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }

    /**
     * @param PhotoSize[][] $photos
     * @return UserProfilePhotos
     */
    public function setPhotos(array $photos): UserProfilePhotos
    {
        $this->photos = $photos;
        return $this;
    }
}
