<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#webhookinfo
 *
 * WebhookInfo Class
 * Contains information about the current status of a webhook.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class WebhookInfo{
	/**
	 * @var string $url Webhook URL, may be empty if webhook is not set up
	 * @var bool $has_custom_certificate True, if a custom certificate was provided for webhook certificate checks
	 * @var int $pending_update_count Number of updates awaiting delivery
	 * @var int $last_error_date Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
	 * @var string $last_error_message Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
	 */
	public $url, $has_custom_certificate, $pending_update_count, $last_error_date, $last_error_message;
	public function __construct(){ }
}