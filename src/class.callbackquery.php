<?php

/**
 * Telegram Bot Api - PHP Wrapper
 * @version 1.1
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */

	class CallbackQuery{
		public $id;
		public $from;
		public $message;
		public $inline_message_id;
		public $data;
		
		public function __construct(){ }
	}
?>