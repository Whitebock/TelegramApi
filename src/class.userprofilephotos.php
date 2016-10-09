<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#userprofilephotos
 *
 * UserProfilePhotos Class
 * This object represent a user's profile pictures.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class UserProfilePhotos{
  /** @var int $total_count Total number of profile pictures the target user has */
  public $total_count;

  /** @var PhotoSize[][] $photos Requested profile pictures (in up to 4 sizes each) */
  public $photos;
		
  public function __construct(){ }
}