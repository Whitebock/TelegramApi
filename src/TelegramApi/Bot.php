<?php

namespace Whitebock\TelegramApi;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * Telegram Bot Api - PHP Wrapper
 * For an updated list of all methods visit
 * https://core.telegram.org/bots/api#available-methods
 *
 * Bot Class
 * Object representing your bot, giving you access to all methods.
 * For examples visit https://github.com/Whitebock/TelegramBot-ApiWrapper
 *
 * @package TelegramBot-Api
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
        $response = $this->callAPI('getMe');
        $me = $this->serializer->deserialize($response, User::class, 'json');
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
     * @param Chat $chat Target chat
     * @param string $text Text of the message to be sent
     * @param array $options [parse_mode=>string, disable_web_page_preview=>bool, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendMessage(Chat $chat, string $text, array $options = null)
    {
        $params = [
          'chat_id' => $chat->getId(),
          'text' => $text
        ];

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $params = array_merge($params, $options);
        }


        $response = $this->callAPI('sendMessage', $params);
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

        $postData = array(
          'chat_id' => $chat_id,
          'from_chat_id' => $from_chat_id,
          'message_id' => $message_id
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('forwardMessage', $postData);
        return $this->serializer->deserialize($response, Message::class, 'json');
    }

    public function sendMedia(Chat $chat, File $file)
    {
        $params = [
          'chat_id' => $chat->getId()
        ];

        $tmp = explode('\\', get_class($file));
        $entity_name = end($tmp);
        $params[strtolower($entity_name)] = $file->getLocalPath();

        $response = $this->callAPI('send'.$entity_name, $params);
        return $this->serializer->deserialize($response, Message::class, 'json');
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
        $postData = array(
          'chat_id' => $chat_id,
          'latitude' => $latitude,
          'longitude' => $longitude
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('sendLocation', $postData);
        return $this->serializer->deserialize($response, Message::class, 'json');
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
        $postData = array(
          'chat_id' => $chat_id,
          'latitude' => $latitude,
          'longitude' => $longitude,
          'title' => $title,
          'address' => $address
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('sendVenue', $postData);
        return $this->serializer->deserialize($response, Message::class, 'json');
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
        $postData = array(
          'chat_id' => $chat_id,
          'phone_number' => $phone_number,
          'first_name' => $first_name
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('sendContact', $postData);
        return $this->serializer->deserialize($response, Message::class, 'json');
    }

    /**
     * @param int|string $chat_id Unique identifier for the target chat
     * @param string $action Type of action to broadcast [typing, upload_photo, record_video, upload_video, record_audio, upload_audio, upload_document, find_location]
     */
    public function sendChatAction($chat_id, $action)
    {
        $postData = array(
          'chat_id' => $chat_id,
          'action' => $action
        );
        $this->callAPI('sendChatAction', $postData);
    }

    /**
     * @param int $user_id Unique identifier of the target user
     * @param array $options [offset=>int, limit=>int]
     * @return UserProfilePhotos
     */
    public function getUserProfilePhotos($user_id, $options = null)
    {

        $postData = array('user_id' => $user_id);
        if (isset($options)) {
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('getUserProfilePhotos', $postData);
        return $this->serializer->deserialize($response, UserProfilePhotos::class, 'json');
    }

    /**
     * Use this method to get basic info about a file and prepare it for downloading.
     *
     * @param string $file_id File identifier to get info about
     * @return File
     */
    public function getFile($file_id)
    {
        $postData = array('file_id' => $file_id);
        $response = $this->callAPI('getFile', $postData);
        $obj = json_decode($response);

        if ($obj === false) {
            return false;
        }

        /**
        $file = new File();
        $file->setFileId($obj->file_id);
        $file->setFileSize($obj->file_size);
        $file->setFilePath($obj->file_path);
        */
        return null;
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
        return $this->callAPI('setWebhook', $options);;
    }

    /**
     * @param string $method
     * @param array $parameters
     * @return string
     * @throws \Exception
     */
    private function callAPI(string $method, array $parameters = []) {
        $curl = curl_init($this->url.$method);
        curl_setopt_array($curl, [
          CURLOPT_SAFE_UPLOAD => true,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_POST => true,
          CURLOPT_POSTFIELDS => $parameters
        ]);

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
}
