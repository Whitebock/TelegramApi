<?php

namespace Whitebock\TelegramApi;

/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#chatmember
 *
 * ChatMember Class
 * This object contains information about one member of the chat.
 *
 * @package TelegramBot-Api
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class ChatMember
{
    /**
     * @var User Information about the user
     */
    protected $user;

    /**
     * @var string The member's status in the chat. Can be “creator”, “administrator”, “member”, “left” or “kicked”
     */
    protected $status;

    /**
     * @var int Restricted and kicked only. Date when restrictions will be lifted for this user, unix time
     */
    protected $until_date;

    /**
     * @var bool Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     */
    protected $can_be_edited;

    /**
     * @var bool Administrators only. True, if the administrator can change the chat title, photo and other settings
     */
    protected $can_change_info;

    /**
     * @var bool Administrators only. True, if the administrator can post in the channel, channels only
     */
    protected $can_post_messages;

    /**
     * @var bool Administrators only. True, if the administrator can edit messages of other users, channels only
     */
    protected $can_edit_messages;

    /**
     * @var bool Administrators only. True, if the administrator can delete messages of other users
     */
    protected $can_delete_messages;

    /**
     * @var bool Administrators only. True, if the administrator can invite new users to the chat
     */
    protected $can_invite_users;

    /**
     * @var bool Administrators only. True, if the administrator can restrict, ban or unban chat members
     */
    protected $can_restrict_members;

    /**
     * @var bool Administrators only. True, if the administrator can pin messages, supergroups only
     */
    protected $can_pin_messages;

    /**
     * @var bool Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     */
    protected $can_promote_members;

    /**
     * @var bool Restricted only. True, if the user can send text messages, contacts, locations and venues
     */
    protected $can_send_messages;

    /**
     * @var bool Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
     */
    protected $can_send_media_messages;

    /**
     * @var bool Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
     */
    protected $can_send_other_messages;

    /**
     * @var bool Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
     */
    protected $can_add_web_page_previews;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getUntilDate(): int
    {
        return $this->until_date;
    }

    /**
     * @return boolean
     */
    public function canBeEdited(): bool
    {
        return $this->can_be_edited;
    }

    /**
     * @return boolean
     */
    public function canChangeInfo(): bool
    {
        return $this->can_change_info;
    }

    /**
     * @return boolean
     */
    public function canPostMessages(): bool
    {
        return $this->can_post_messages;
    }

    /**
     * @return boolean
     */
    public function canEditMessages(): bool
    {
        return $this->can_edit_messages;
    }

    /**
     * @return boolean
     */
    public function canDeleteMessages(): bool
    {
        return $this->can_delete_messages;
    }

    /**
     * @return boolean
     */
    public function canInviteUsers(): bool
    {
        return $this->can_invite_users;
    }

    /**
     * @return boolean
     */
    public function canRestrictMembers(): bool
    {
        return $this->can_restrict_members;
    }

    /**
     * @return boolean
     */
    public function canPinMessages(): bool
    {
        return $this->can_pin_messages;
    }

    /**
     * @return boolean
     */
    public function canPromoteMembers(): bool
    {
        return $this->can_promote_members;
    }

    /**
     * @return boolean
     */
    public function canSendMessages(): bool
    {
        return $this->can_send_messages;
    }

    /**
     * @return boolean
     */
    public function canSendMediaMessages(): bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * @return boolean
     */
    public function canSendOtherMessages(): bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * @return boolean
     */
    public function canAddWebPagePreviews(): bool
    {
        return $this->can_add_web_page_previews;
    }
}
