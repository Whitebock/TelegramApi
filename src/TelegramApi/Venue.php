<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#venue
 *
 * Venue Class
 * This object represents a venue.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Venue
{
    /**
     * @var Location $location Venue location
     */
    protected $location;

    /**
     * @var string $title Name of the venue
     */
    protected $title;

    /**
     * @var string $address Address of the venue
     */
    protected $address;

    /**
     * @var string $foursquare_id Optional. Foursquare identifier of the venue
     */
    protected $foursquare_id;

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
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
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getFoursquareId(): string
    {
        return $this->foursquare_id;
    }

    /**
     * @param string $foursquare_id
     */
    public function setFoursquareId(string $foursquare_id)
    {
        $this->foursquare_id = $foursquare_id;
    }


}
