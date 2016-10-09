<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#location
 *
 * Location Class
 * This object represents a point on the map.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Location{
  /** @var float $longitude Longitude as defined by sender */
  public $longitude;

  /** @var float $latitude Latitude as defined by sender */
  public $latitude;
		
  public function __construct(){ }
}