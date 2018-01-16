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
 * This object represents a voice note.
 *
 * @see https://core.telegram.org/bots/api#voice Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class Voice extends File
{

    /**
     * @var int Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string MIME type of the file as defined by sender
     */
    protected $mime_type;

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Voice
     */
    public function setDuration(int $duration): Voice
    {
        $this->duration = $duration;
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
     * @return Voice
     */
    public function setMimeType(string $mime_type): Voice
    {
        $this->mime_type = $mime_type;
        return $this;
    }
}
