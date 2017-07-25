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
     * @var Location Venue location
     */
    protected $location;

    /**
     * @var string Name of the venue
     */
    protected $title;

    /**
     * @var string Address of the venue
     */
    protected $address;

    /**
     * @var string Foursquare identifier of the venue
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
     * @return Venue
     */
    public function setLocation(Location $location): Venue
    {
        $this->location = $location;
        return $this;
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
     * @return Venue
     */
    public function setTitle(string $title): Venue
    {
        $this->title = $title;
        return $this;
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
     * @return Venue
     */
    public function setAddress(string $address): Venue
    {
        $this->address = $address;
        return $this;
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
     * @return Venue
     */
    public function setFoursquareId(string $foursquare_id): Venue
    {
        $this->foursquare_id = $foursquare_id;
        return $this;
    }
}
