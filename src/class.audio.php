<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#audio
 *
 * Audio Class
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Audio{
  /** @var string $file_id Unique identifier for this file */
  public $file_id;

  /** @var int $duration Duration of the audio in seconds as defined by sender */
  public $duration;

  /** @var string $performer Optional. Performer of the audio as defined by sender or by audio tags */
  public $performer;

  /** @var string $title Optional. Title of the audio as defined by sender or by audio tags */
  public $title;

  /** @var string $mime_type Optional. MIME type of the file as defined by sender */
  public $mime_type;

  /** @var int $file_size Optional. File size */
  public $file_size;
		
  public function __construct(){ }
}