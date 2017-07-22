<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#sticker
 *
 * Sticker Class
 * This object represents a sticker.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Sticker extends File
{

    /**
     * @var int $width Sticker width
     */
    protected $width;

    /**
     * @var int $height Sticker height
     */
    protected $height;

    /**
     * @var PhotoSize $thumb Optional. Sticker thumbnail in .webp or .jpg format
     */
    protected $thumb;

    /**
     * @var string $emoji Optional. Emoji associated with the sticker
     */
    protected $emoji;

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
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
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    /**
     * @return PhotoSize
     */
    public function getThumb(): PhotoSize
    {
        return $this->thumb;
    }

    /**
     * @param PhotoSize $thumb
     */
    public function setThumb(PhotoSize $thumb)
    {
        $this->thumb = $thumb;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     */
    public function setEmoji(string $emoji)
    {
        $this->emoji = $emoji;
    }


}
