<?php

/**
 * Telegram Bot Api - PHP Wrapper
 * @version 0.8
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @todo Implement all api functions
 */

class Bot {
    private $token;
    private $url;
    const apiurl = 'https://api.telegram.org/bot';
    public function Bot($token) {
        $this->token = $token;
        $this->url   = $this::apiurl . $this->token . '/';
    }
    
    /**
     * @return User Information about the bot in form of a User object
     */
    public function getMe() {
        $obj  = $this->sendPOSTRequest($this->url . 'getMe');
        $user = parseClass($obj, 'User');
        return $user;
    }
    
     /**
     * @param array $postdata
     * @return array POST data prepared for sending
     */
    private function serializePOSTData($postdata){
      
      if (isset($postdata['reply_markup'])) {
        
        $markup = $postdata['reply_markup'];
        $markup = array_filter((array) $markup, function($var) { return !is_null($var); });
        $json = json_encode($markup);
        $postdata['reply_markup'] = $json;
      }
      
      return $postdata;
    }
  
    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param string $text Text of the message to be sent
     * @param array $options [parse_mode=>string, disable_web_page_preview=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendMessage($chat_id, $text, $options = null) {
      
      $postdata = array(
        'chat_id' => $chat_id,
        'text' => $text
      );
      
      if(isset($options)){
        $options = $this -> serializePOSTData($options);
        $postdata = array_merge($postdata, $options);  
      }
      
      
      $obj = $this->sendPOSTRequest($this->url . 'sendMessage', $postdata);
      return parseClass($obj, 'Message');
    }
    
    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $photo Photo to send
     * @param array $options [caption=>string, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendPhoto($chat_id, $photo, $options = null) {
      $postdata = array(
        'chat_id' => $chat_id,
        'photo' => $photo
      );
      
      if(isset($options)){
        $options = $this -> serializePOSTData($options);
        $postdata = array_merge($postdata, $options);  
      }
        
      $obj = $this->sendPOSTRequest($this->url . 'sendPhoto', $postdata);
      return parseClass($obj, 'Message');
    }
    
    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param string $action Type of action to broadcast [typing, upload_photo, record_video, upload_video, record_audio, upload_audio, upload_document, find_location]
     */
    public function sendChatAction($chat_id, $action) {
        $postdata = array(
            'chat_id' => $chat_id,
            'action' => $action
        );
        $this->sendPOSTRequest($this->url . 'sendChatAction', $postdata);
    }
    
    /**
     * @param array $options [offset=>int, limit=>int, timeout=>int]
     * @return Update[]
     */
    public function getUpdates($options = null) {
        $obj = $this->sendPOSTRequest($this->url . 'getUpdates', $options);
        foreach ($obj as $updateObj) {
            $updates[] = parseClass($updateObj, 'Update');
        }
        
        return $updates;
    }
    
     /**
     * @param array $options [url=>string, certificate=>InputFile]
     * @return bool
     */
    public function setWebhook($options = null) {
        $obj = $this->sendPOSTRequest($this->url . 'setWebhook', $options);
        return $obj;
    }
    
    /**
     * @param string $url
     * @param array $postdata
     * @return JSONObject|bool
     */
    public function sendPOSTRequest($url, $postdata = null) {
        if (empty($postdata)) {
            $postdata = array();
        }
        
        $curl = curl_init($url);
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $postdata
        ));
        $json = curl_exec($curl);
        curl_close($curl);
        if (empty(json_decode($json)->result)) {
            return json_decode($json)->ok;
        }
        
        return json_decode($json)->result;
    }
}

?>