<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#voice
 *
 * Voice Class
 * This object represents a voice note.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Voice{
  /** @var string $file_id Unique identifier for this file */
  public $file_id;

  /** @var int $duration Duration of the audio in seconds as defined by sender */
  public $duration;

  /** @var string $mime_type Optional. MIME type of the file as defined by sender */
  public $mime_type;

  /** @var int $file_size Optional. File size */
  public $file_size;
		
  public function __construct(){ }
}