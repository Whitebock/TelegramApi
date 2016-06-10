<?php

/**
 * Telegram Bot Api - PHP Wrapper
 * @version 1.1
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */

	class Update{
		public $update_id;
		public $message;
		public $edited_message;
		public $inline_query;
		public $chosen_inline_result;
		public $callback_query;
		
		public function __construct(){ }
	}
?>