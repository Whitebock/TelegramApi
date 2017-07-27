<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#photosize
 *
 * PhotoSize Class
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Photo extends File
{
    /**
     * @var int Photo width
     */
    protected $width;

    /**
     * @var int Photo height
     */
    protected $height;

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Photo
     */
    public function setWidth(int $width): Photo
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Photo
     */
    public function setHeight(int $height): Photo
    {
        $this->height = $height;
        return $this;
    }
}
