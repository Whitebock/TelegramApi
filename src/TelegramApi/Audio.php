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
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @see https://core.telegram.org/bots/api#audio Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class Audio extends File
{

    /**
     * @var int Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string Performer of the audio as defined by sender or by audio tags
     */
    protected $performer;

    /**
     * @var string Title of the audio as defined by sender or by audio tags
     */
    protected $title;

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
     * @return Audio
     */
    public function setDuration(int $duration): Audio
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getPerformer(): string
    {
        return $this->performer;
    }

    /**
     * @param string $performer
     * @return Audio
     */
    public function setPerformer(string $performer): Audio
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Audio
     */
    public function setTitle(string $title): Audio
    {
        $this->title = $title;
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
     * @return Audio
     */
    public function setMimeType(string $mime_type): Audio
    {
        $this->mime_type = $mime_type;
        return $this;
    }
}
