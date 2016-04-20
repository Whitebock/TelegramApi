<?php

/**
 * Telegram Bot Api - PHP Wrapper
 * @version 1.0
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */

	class Message{
		public $message_id;
		public $from;
		public $date;
		public $chat;
		public $forward_from;
		public $forward_date;
		public $reply_to_message;
		public $text;
		public $entities;
		public $audio;
		public $document;
		public $photo;
		public $sticker;
		public $video;
		public $voice;
		public $caption;
		public $contact;
		public $location;
		public $venue;
		public $new_chat_member;
		public $left_chat_member;
		public $new_chat_title;
		public $new_chat_photo;
		public $delete_chat_photo;
		public $group_chat_created;
		public $supergroup_chat_created;
		public $channel_chat_created;
		public $migrate_to_chat_id;
		public $migrate_from_chat_id;
		public $pinned_message;
		
		public function __construct(){ }
	}
?>