<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#venue
 *
 * Venue Class
 * This object represents a venue.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Venue{
  /** @var Location $location Venue location */
  public $location;

  /** @var string $title Name of the venue */
  public $title;

  /** @var string $address Address of the venue */
  public $address;

  /** @var string $foursquare_id Optional. Foursquare identifier of the venue */
  public $foursquare_id;
		
  public function __construct(){ }
}