<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#sticker
 *
 * Sticker Class
 * This object represents a sticker.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Sticker{
  /** @var string $file_id Unique identifier for this file */
  public $file_id;

  /** @var int $width Sticker width */
  public $width;

  /** @var int $height Sticker height */
  public $height;

  /** @var PhotoSize $thumb Optional. Sticker thumbnail in .webp or .jpg format */
  public $thumb;

  /** @var string $emoji Optional. Emoji associated with the sticker */
  public $emoji;

  /** @var int $file_size Optional. File size */
  public $file_size;
		
  public function __construct(){ }
}