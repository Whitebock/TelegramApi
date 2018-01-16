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

/**
 * This object represents a sticker set.
 *
 * @see https://core.telegram.org/bots/api#stickerset Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class StickerSet
{
    /**
     * @var string Sticker set name
     */
    protected $name;

    /**
     * @var string Sticker set title
     */
    protected $title;

    /**
     * @var bool True, if the sticker set contains masks
     */
    protected $contains_masks;

    /**
     * @var Sticker[] List of all set stickers
     */
    protected $stickers;
}