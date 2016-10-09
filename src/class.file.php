<?php
/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated description of this class visit
 * https://core.telegram.org/bots/api#file
 *
 * File Class
 * This object represents a file ready to be downloaded. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class File{
  /** @var string $file_id Unique identifier for this file */
  public $file_id;

  /** @var int $file_size Optional. File size, if known */
  public $file_size;

  /** @var string $file_path Optional. File path. */
  public $file_path;

  /** @var string $apiurl Baseurl to download the requestet file */
  private $apiurl;
		
  public function __construct($apiurl, $token) { 
    $this -> apiurl = $apiurl.'file/bot'.$token.'/';
  }

  /**
   * Downloads this file to a local file
   *
   * @param string $to_file The filepath to download to, for example: '/img/test.jpg'
   * @return bool Returns true if it was successful
   */
  public function downloadTo($to_file){
    
    $rawdata = $this -> download();
		
    $fp = fopen($to_file,'w');
    if($fp === false)
      return false;
    fwrite($fp, $rawdata); 
    fclose($fp);
    return true;
  }

  /**
   * Downloads this file
   *
   * @return string The raw file data
   */
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