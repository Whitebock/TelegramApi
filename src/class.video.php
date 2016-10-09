<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#video
 *
 * Video Class
 * This object represents a video file.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Video{
  /** @var string $file_id Unique identifier for this file */
  public $file_id;

  /** @var int $width Video width as defined by sender */
  public $width;

  /** @var int $height Video height as defined by sender */
  public $height;

  /** @var int $duration Duration of the video in seconds as defined by sender */
  public $duration;

  /** @var PhotoSize $thumb Optional. Video thumbnail */
  public $thumb;

  /** @var string $mime_type Optional. Mime type of a file as defined by sender */
  public $mime_type;

  /** @var int $file_size Optional. File size */
  public $file_size;
		
  public function __construct(){ }
}