<?php

/*
 * This file is part of the Telegram Bot API wrapper.
 *
 * (c) Sven Drewniok <sven.drewniok@web.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Whitebock\TelegramApi\Sticker;

use Whitebock\TelegramApi\File;
use Whitebock\TelegramApi\Photo;

/**
 * This object represents a sticker.
 *
 * @see https://core.telegram.org/bots/api#sticker Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class Sticker extends File
{

    /**
     * @var int Sticker width
     */
    protected $width;

    /**
     * @var int Sticker height
     */
    protected $height;

    /**
     * @var Photo Sticker thumbnail in .webp or .jpg format
     */
    protected $thumb;

    /**
     * @var string Emoji associated with the sticker
     */
    protected $emoji;

    /**
     * @var string Name of the sticker set to which the sticker belongs
     */
    protected $set_name;

    /**
     * @var MaskPosition For mask stickers, the position where the mask should be placed
     */
    protected $mask_position;

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Sticker
     */
    public function setWidth(int $width): Sticker
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
     * @return Sticker
     */
    public function setHeight(int $height): Sticker
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return Photo
     */
    public function getThumb(): Photo
    {
        return $this->thumb;
    }

    /**
     * @param Photo $thumb
     * @return Sticker
     */
    public function setThumb(Photo $thumb): Sticker
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     * @return Sticker
     */
    public function setEmoji(string $emoji): Sticker
    {
        $this->emoji = $emoji;
        return $this;
    }

    /**
     * @return string
     */
    public function getSetName(): string
    {
        return $this->set_name;
    }

    /**
     * @param string $set_name
     * @return Sticker
     */
    public function setSetName(string $set_name): Sticker
    {
        $this->set_name = $set_name;
        return $this;
    }

    /**
     * @return MaskPosition
     */
    public function getMaskPosition(): MaskPosition
    {
        return $this->mask_position;
    }

    /**
     * @param MaskPosition $mask_position
     * @return Sticker
     */
    public function setMaskPosition(MaskPosition $mask_position): Sticker
    {
        $this->mask_position = $mask_position;
        return $this;
    }
}
