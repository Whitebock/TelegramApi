<?php

/*
 * This file is part of the Telegram Bot API wrapper.
 *
 * (c) Sven Drewniok <sven.drewniok@web.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Whitebock\TelegramApi;

/**
 * This object represents a venue.
 *
 * @see https://core.telegram.org/bots/api#venue Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
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
