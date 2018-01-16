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
 * Contains information about the current status of a webhook.
 *
 * @see https://core.telegram.org/bots/api#webhookinfo Up-to-date description of this class
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */
class WebhookInfo
{
    /**
     * @var string Webhook URL, may be empty if webhook is not set up
     */
    protected $url;

    /**
     * @var bool True, if a custom certificate was provided for webhook certificate checks
     */
    protected $has_custom_certificate;

    /**
     * @var int Number of updates awaiting delivery
     */
    protected $pending_update_count;#

    /**
     * @var int Unix time for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_date;

    /**
     * @var string Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_message;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return boolean
     */
    public function getHasCustomCertificate(): bool
    {
        return $this->has_custom_certificate;
    }

    /**
     * @return int
     */
    public function getPendingUpdateCount(): int
    {
        return $this->pending_update_count;
    }

    /**
     * @return int
     */
    public function getLastErrorDate(): int
    {
        return $this->last_error_date;
    }

    /**
     * @return string
     */
    public function getLastErrorMessage(): string
    {
        return $this->last_error_message;
    }
}
