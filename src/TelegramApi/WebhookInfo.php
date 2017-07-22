<?php
namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#webhookinfo
 *
 * WebhookInfo Class
 * Contains information about the current status of a webhook.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class WebhookInfo
{
    /**
     * @var string $url Webhook URL, may be empty if webhook is not set up
     */
    protected $url;

    /**
     * @var bool $has_custom_certificate True, if a custom certificate was provided for webhook certificate checks
     */
    protected $has_custom_certificate;

    /**
     * @var int $pending_update_count Number of updates awaiting delivery
     */
    protected $pending_update_count;#

    /**
     * @var int $last_error_date Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     */
    protected $last_error_date;

    /**
     * @var string $last_error_message Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
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
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return boolean
     */
    public function isHasCustomCertificate(): bool
    {
        return $this->has_custom_certificate;
    }

    /**
     * @param boolean $has_custom_certificate
     */
    public function setHasCustomCertificate(bool $has_custom_certificate)
    {
        $this->has_custom_certificate = $has_custom_certificate;
    }

    /**
     * @return int
     */
    public function getPendingUpdateCount(): int
    {
        return $this->pending_update_count;
    }

    /**
     * @param int $pending_update_count
     */
    public function setPendingUpdateCount(int $pending_update_count)
    {
        $this->pending_update_count = $pending_update_count;
    }

    /**
     * @return int
     */
    public function getLastErrorDate(): int
    {
        return $this->last_error_date;
    }

    /**
     * @param int $last_error_date
     */
    public function setLastErrorDate(int $last_error_date)
    {
        $this->last_error_date = $last_error_date;
    }

    /**
     * @return string
     */
    public function getLastErrorMessage(): string
    {
        return $this->last_error_message;
    }

    /**
     * @param string $last_error_message
     */
    public function setLastErrorMessage(string $last_error_message)
    {
        $this->last_error_message = $last_error_message;
    }


}
