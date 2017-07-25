<?php

namespace Whitebock\TelegramApi\Sticker;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#sticker
 *
 * MaskPosition Class
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class MaskPosition
{
    /**
     * @var string The part of the face relative to which the mask should be placed. One of "forehead", "eyes", "mouth", or "chin"
     */
    protected $point;

    /**
     * @var float Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position
     */
    protected $x_shift;

    /**
     * @var float Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position
     */
    protected $y_shift;

    /**
     * @var float ask scaling coefficient. For example, 2.0 means double size
     */
    protected $scale;
}