<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#location
 *
 * Location Class
 * This object represents a point on the map.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Location
{
    /**
     * @var float Longitude as defined by sender
     */
    protected $longitude;

    /**
     * @var float Latitude as defined by sender
     */
    protected $latitude;

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Location
     */
    public function setLongitude(float $longitude): Location
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Location
     */
    public function setLatitude(float $latitude): Location
    {
        $this->latitude = $latitude;
        return $this;
    }
}
