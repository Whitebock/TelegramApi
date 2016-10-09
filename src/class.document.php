<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#document
 *
 * Document Class
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Document{
  /** @var string $file_id Unique file identifier */
  public $file_id;

  /** @var PhotoSize $thumb Optional. Document thumbnail as defined by sender */
  public $thumb;

  /** @var string $file_name Optional. Original filename as defined by sender */
  public $file_name;

  /** @var string $mime_type Optional. MIME type of the file as defined by sender */
  public $mime_type;

  /** @var int $file_size Optional. File size */
  public $file_size;
		
  public function __construct(){ }
}