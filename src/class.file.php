<?php

/**
 * Telegram Bot Api - PHP Wrapper
 * @version 1.1
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 */

	class File{
		public $file_id;
		public $file_size;
		public $file_path;
		
		private $apiurl;
		
		public function __construct($apiurl, $token) { 
			$this -> apiurl = $apiurl.'file/bot'.$token.'/';
		}
		
		public function downloadTo($to_file){
			
			$rawdata = $this -> download();
		
			$fp = fopen($to_file,'w');
			if($fp === false)
				return false;
			fwrite($fp, $rawdata); 
			fclose($fp);
			return true;
		}
		
		public function download(){
			$ch = curl_init($this -> apiurl.$this -> file_path);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
			$rawdata = curl_exec ($ch);
			curl_close ($ch);
			
			return $rawdata;
		}
	}
?>