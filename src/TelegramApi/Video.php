<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#video
 *
 * Video Class
 * This object represents a video file.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Video extends File
{

    /**
     * @var int Video width as defined by sender
     */
    protected $width;

    /**
     * @var int Video height as defined by sender
     */
    protected $height;

    /**
     * @var int Duration of the video in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var PhotoSize Video thumbnail
     */
    protected $thumb;

    /**
     * @var string Mime type of a file as defined by sender
     */
    protected $mime_type;

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Video
     */
    public function setWidth(int $width): Video
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
     * @return Video
     */
    public function setHeight(int $height): Video
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Video
     */
    public function setDuration(int $duration): Video
    {
        $this->duration = $duration;
        return $this;
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
     * @return Video
     */
    public function setThumb(PhotoSize $thumb): Video
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mime_type;
    }

    /**
     * @param string $mime_type
     * @return Video
     */
    public function setMimeType(string $mime_type): Video
    {
        $this->mime_type = $mime_type;
        return $this;
    }
}
