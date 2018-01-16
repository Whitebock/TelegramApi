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
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @see https://core.telegram.org/bots/api#document Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class Document extends File
{
    /**
     * @var Photo Document thumbnail as defined by sender
     */
    protected $thumb;

    /**
     * @var string Original filename as defined by sender
     */
    protected $file_name;

    /**
     * @var string MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @return Photo
     */
    public function getThumb(): Photo
    {
        return $this->thumb;
    }

    /**
     * @param Photo $thumb
     * @return Document
     */
    public function setThumb(Photo $thumb): Document
    {
        $this->thumb = $thumb;
        return $this;
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
     * @return Document
     */
    public function setFileName(string $file_name): Document
    {
        $this->file_name = $file_name;
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
     * @return Document
     */
    public function setMimeType(string $mime_type): Document
    {
        $this->mime_type = $mime_type;
        return $this;
    }
}
