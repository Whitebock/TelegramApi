<?php

namespace Whitebock\TelegramApi\Sticker;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#sticker
 *
 * StickerSet Class
 * This object represents a sticker set.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
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