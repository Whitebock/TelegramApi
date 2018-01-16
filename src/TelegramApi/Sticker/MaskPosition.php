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
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @see https://core.telegram.org/bots/api#maskposition Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
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