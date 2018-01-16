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
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @see ttps://core.telegram.org/bots/api#photosize Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class Photo extends File
{
    /**
     * @var int Photo width
     */
    protected $width;

    /**
     * @var int Photo height
     */
    protected $height;

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Photo
     */
    public function setWidth(int $width): Photo
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Photo
     */
    public function setHeight(int $height): Photo
    {
        $this->height = $height;
        return $this;
    }
}
