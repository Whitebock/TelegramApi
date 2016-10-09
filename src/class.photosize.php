<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#photosize
 *
 * PhotoSize Class
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class PhotoSize{
  /** @var string $file_id Unique identifier for this file */
  public $file_id;

  /** @var int $width Photo width */
  public $width;
  
  /** @var int $height Photo height */
  public $height;

  /** @var int $file_size Optional. File size */
  public $file_size;
	
  public function __construct(){ }
}