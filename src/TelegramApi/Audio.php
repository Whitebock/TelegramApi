<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#audio
 *
 * Audio Class
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Audio extends File
{

    /**
     * @var int $duration Duration of the audio in seconds as defined by sender
     */
    protected $duration;

    /**
     * @var string $performer Optional. Performer of the audio as defined by sender or by audio tags
     */
    protected $performer;

    /**
     * @var string $title Optional. Title of the audio as defined by sender or by audio tags
     */
    protected $title;

    /**
     * @var string $mime_type Optional. MIME type of the file as defined by sender
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
     */
    public function setDuration(int $duration)
    {
        $this->duration = $duration;
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
     */
    public function setPerformer(string $performer)
    {
        $this->performer = $performer;
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
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
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
