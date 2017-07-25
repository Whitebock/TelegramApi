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
     * @param User $user
     * @return ChatMember
     */
    public function setUser(User $user): ChatMember
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return ChatMember
     */
    public function setStatus(string $status): ChatMember
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getUntilDate(): int
    {
        return $this->until_date;
    }

    /**
     * @param int $until_date
     * @return ChatMember
     */
    public function setUntilDate(int $until_date): ChatMember
    {
        $this->until_date = $until_date;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanBeEdited(): bool
    {
        return $this->can_be_edited;
    }

    /**
     * @param boolean $can_be_edited
     * @return ChatMember
     */
    public function setCanBeEdited(bool $can_be_edited): ChatMember
    {
        $this->can_be_edited = $can_be_edited;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanChangeInfo(): bool
    {
        return $this->can_change_info;
    }

    /**
     * @param boolean $can_change_info
     * @return ChatMember
     */
    public function setCanChangeInfo(bool $can_change_info): ChatMember
    {
        $this->can_change_info = $can_change_info;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanPostMessages(): bool
    {
        return $this->can_post_messages;
    }

    /**
     * @param boolean $can_post_messages
     * @return ChatMember
     */
    public function setCanPostMessages(bool $can_post_messages): ChatMember
    {
        $this->can_post_messages = $can_post_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanEditMessages(): bool
    {
        return $this->can_edit_messages;
    }

    /**
     * @param boolean $can_edit_messages
     * @return ChatMember
     */
    public function setCanEditMessages(bool $can_edit_messages): ChatMember
    {
        $this->can_edit_messages = $can_edit_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanDeleteMessages(): bool
    {
        return $this->can_delete_messages;
    }

    /**
     * @param boolean $can_delete_messages
     * @return ChatMember
     */
    public function setCanDeleteMessages(bool $can_delete_messages): ChatMember
    {
        $this->can_delete_messages = $can_delete_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanInviteUsers(): bool
    {
        return $this->can_invite_users;
    }

    /**
     * @param boolean $can_invite_users
     * @return ChatMember
     */
    public function setCanInviteUsers(bool $can_invite_users): ChatMember
    {
        $this->can_invite_users = $can_invite_users;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanRestrictMembers(): bool
    {
        return $this->can_restrict_members;
    }

    /**
     * @param boolean $can_restrict_members
     * @return ChatMember
     */
    public function setCanRestrictMembers(bool $can_restrict_members): ChatMember
    {
        $this->can_restrict_members = $can_restrict_members;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanPinMessages(): bool
    {
        return $this->can_pin_messages;
    }

    /**
     * @param boolean $can_pin_messages
     * @return ChatMember
     */
    public function setCanPinMessages(bool $can_pin_messages): ChatMember
    {
        $this->can_pin_messages = $can_pin_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanPromoteMembers(): bool
    {
        return $this->can_promote_members;
    }

    /**
     * @param boolean $can_promote_members
     * @return ChatMember
     */
    public function setCanPromoteMembers(bool $can_promote_members): ChatMember
    {
        $this->can_promote_members = $can_promote_members;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanSendMessages(): bool
    {
        return $this->can_send_messages;
    }

    /**
     * @param boolean $can_send_messages
     * @return ChatMember
     */
    public function setCanSendMessages(bool $can_send_messages): ChatMember
    {
        $this->can_send_messages = $can_send_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanSendMediaMessages(): bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * @param boolean $can_send_media_messages
     * @return ChatMember
     */
    public function setCanSendMediaMessages(bool $can_send_media_messages): ChatMember
    {
        $this->can_send_media_messages = $can_send_media_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanSendOtherMessages(): bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * @param boolean $can_send_other_messages
     * @return ChatMember
     */
    public function setCanSendOtherMessages(bool $can_send_other_messages): ChatMember
    {
        $this->can_send_other_messages = $can_send_other_messages;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCanAddWebPagePreviews(): bool
    {
        return $this->can_add_web_page_previews;
    }

    /**
     * @param boolean $can_add_web_page_previews
     * @return ChatMember
     */
    public function setCanAddWebPagePreviews(bool $can_add_web_page_previews): ChatMember
    {
        $this->can_add_web_page_previews = $can_add_web_page_previews;
        return $this;
    }


}
