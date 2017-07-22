<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#document
 *
 * Document Class
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Document extends File
{
    /**
     * @var PhotoSize $thumb Optional. Document thumbnail as defined by sender
     */
    protected $thumb;

    /**
     * @var string $file_name Optional. Original filename as defined by sender
     */
    protected $file_name;

    /**
     * @var string $mime_type Optional. MIME type of the file as defined by sender
     */
    protected $mime_type;

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
    public function getFileName(): string
    {
        return $this->file_name;
    }

    /**
     * @param string $file_name
     */
    public function setFileName(string $file_name)
    {
        $this->file_name = $file_name;
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
     */
    public function setMimeType(string $mime_type)
    {
        $this->mime_type = $mime_type;
    }


}
