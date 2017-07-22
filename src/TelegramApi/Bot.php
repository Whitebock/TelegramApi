<?php

namespace Whitebock\TelegramApi;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated list of all methodes visit
 * https://core.telegram.org/bots/api#available-methods
 *
 * Bot Class
 * Object representing your bot, giving you access to all methods.
 * For examples visit https://github.com/Whitebock/TelegramBot-ApiWrapper
 *
 * @package TelegramBot-Api
 * @version 1.2
 * @author Sven Drewniok <sven.drewniok@web.de>
 * @author Sven Drewniok @Whitebock
 * @license https://opensource.org/licenses/MIT MIT License
 */
class Bot extends User
{
    /**
     * @var string $token Your bot's auth token
     */
    private $token;

    /**
     * @var string $url Combined url of the baseurl and your token
     */
    private $url;

    /**
     * @var Serializer $serializer
     */
    private $serializer;

    /**
     * @var string API_URL Baseurl for all requests
     */
    const API_URL = 'https://api.telegram.org/';

    public function __construct($token)
    {
        $this->token = $token;
        $this->url = $this::API_URL . 'bot' . $this->token . '/';
        $this->serializer = new Serializer([new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new ArrayDenormalizer()], [new JsonEncoder()]);
    }

    /**
     * @return User Information about the bot in form of a User object
     */
    public function getMe()
    {
        $json = $this->sendPOSTRequest($this->url . 'getMe');
        $reflection = new \ReflectionProperty('Whitebock\TelegramApi\User', 'id');
        $reflection->setAccessible(true);

        $me = new User($json->first_name);
        $me->setUsername($json->username);
        $reflection->setValue($me, $json->id);
        return $me;
    }

    /**
     * @param array $postData
     * @return array POST data prepared for sending
     */
    private function serializePOSTData($postData)
    {

        if (isset($postData['reply_markup'])) {

            $markup = $postData['reply_markup'];
            $markup = array_filter((array)$markup, function ($var) {
                return !is_null($var);
            });
            $json = json_encode($markup);
            $postData['reply_markup'] = $json;
        }

        return $postData;
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param string $text Text of the message to be sent
     * @param array $options [parse_mode=>string, disable_web_page_preview=>bool, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendMessage($chat_id, $text, $options = null)
    {

        $postData = array(
          'chat_id' => $chat_id,
          'text' => $text
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }


        $response = $this->callAPI('sendMessage', $postData);
        return $this->serializer->deserialize($response, Message::class, 'json');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param int|string $from_chat_id Unique identifier for the original chat
     * @param int $message_id Unique message identifier
     * @param array $options [disable_notification=>bool]
     * @return Message The send Message object
     */
    public function forwardMessage($chat_id, $from_chat_id, $message_id, $options = null)
    {

        $postdata = array(
          'chat_id' => $chat_id,
          'from_chat_id' => $from_chat_id,
          'message_id' => $message_id
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }


        $obj = $this->sendPOSTRequest($this->url . 'forwardMessage', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $photo Photo to send
     * @param array $options [caption=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendPhoto($chat_id, $photo, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'photo' => $photo
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendPhoto', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $audio Audio to send
     * @param array $options [duration=>int, performer=>string, title=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendAudio($chat_id, $audio, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'audio' => $audio
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendAudio', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $document Document to send
     * @param array $options [caption=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendDocument($chat_id, $document, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'document' => $document
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendDocument', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $sticker Sticker to send
     * @param array $options [disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendSticker($chat_id, $sticker, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'sticker' => $sticker
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendSticker', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $video Video to send
     * @param array $options [duration=>int, width=>int, height=>int, caption=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendVideo($chat_id, $video, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'video' => $video
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendVideo', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param InputFile|string $voice Voice to send
     * @param array $options [duration=>int, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendVoice($chat_id, $voice, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'voice' => $voice
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendVoice', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param float $latitude Latitude of location
     * @param float $longitude Longitude of location
     * @param array $options [disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendLocation($chat_id, $latitude, $longitude, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'latitude' => $latitude,
          'longitude' => $longitude
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendLocation', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param float $latitude Latitude of the venue
     * @param float $longitude Longitude of venue
     * @param string $title Name of the venue
     * @param string $address Address of the venue
     * @param array $options [foursquare_id=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendVenue($chat_id, $latitude, $longitude, $title, $address, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'latitude' => $latitude,
          'longitude' => $longitude,
          'title' => $title,
          'address' => $address
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendVenue', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param array $options [last_name=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendContact($chat_id, $phone_number, $first_name, $options = null)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'phone_number' => $phone_number,
          'first_name' => $first_name
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'sendContact', $postdata);
        return parseClass($obj, 'Message');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param string $action Type of action to broadcast [typing, upload_photo, record_video, upload_video, record_audio, upload_audio, upload_document, find_location]
     */
    public function sendChatAction($chat_id, $action)
    {
        $postdata = array(
          'chat_id' => $chat_id,
          'action' => $action
        );
        $this->sendPOSTRequest($this->url . 'sendChatAction', $postdata);
    }

    /**
     * @param int $user_id Unique identifier of the target user
     * @param array $options [offset=>int, limit=>int]
     * @return UserProfilePhotos
     */
    public function getUserProfilePhotos($user_id, $options = null)
    {

        $postdata = array('user_id' => $user_id);
        if (isset($options)) {
            $postdata = array_merge($postdata, $options);
        }

        $obj = $this->sendPOSTRequest($this->url . 'getUserProfilePhotos', $postdata);

        return parseClass($obj, 'UserProfilePhotos');
    }

    /**
     * Use this method to get basic info about a file and prepare it for downloading.
     *
     * @param string $file_id File identifier to get info about
     * @return File
     */
    public function getFile($file_id)
    {
        $postdata = array('file_id' => $file_id);
        $obj = $this->sendPOSTRequest($this->url . 'getFile', $postdata);

        if ($obj === false) {
            return false;
        }

        $file = new File($this::API_URL, $this->token);
        $file->setFileId($obj->file_id);
        $file->setFileSize($obj->file_size);
        $file->setFilePath($obj->file_path);

        return $file;
    }

    /**
     * @param array $options [offset=>int, limit=>int, timeout=>int]
     * @return Update[]
     */
    public function getUpdates($options = [])
    {
        $response = $this->callAPI('getUpdates', $options);
        $updates = $this->serializer->deserialize($response, Update::class . '[]', 'json');

        return $updates;
    }

    /**
     * @param array $options [url=>string, certificate=>InputFile]
     * @return bool
     */
    public function setWebHook($options = null)
    {
        $obj = $this->sendPOSTRequest($this->url . 'setWebhook', $options);
        return $obj;
    }

    /**
     * @param string $method
     * @param array $parameters
     * @return string
     * @throws \Exception
     */
    private function callAPI(string $method, array $parameters = []) {

        $curl = curl_init($this->url.$method);
        curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_POST => 1,
          CURLOPT_POSTFIELDS => $parameters
        ));

        $json = curl_exec($curl);
        curl_close($curl);

        if (empty($json)) {
            throw new \UnexpectedValueException("API call returned an empty response");
        }

        $response = json_decode($json);

        if (!$response->ok) {
            throw new \Exception($response->description, $response->error_code);
        }
        return json_encode($response->result);
    }

    /**
     * @param string $url
     * @param array $postData
     * @return object|bool
     */
    public function sendPOSTRequest(string $url, array $postData = null)
    {
        $postData = is_array($postData) ? $postData : [];

        $curl = curl_init($url);
        curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_POST => 1,
          CURLOPT_POSTFIELDS => $postData
        ));
        $json = curl_exec($curl);
        curl_close($curl);
        if (empty($json)) {
            return false;
        }
        if (empty(json_decode($json)->result)) {
            return json_decode($json)->ok;
        }
        return json_decode($json)->result;
    }
}