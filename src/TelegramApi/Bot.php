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
    public function getMe(): User
    {
        $response = $this->callAPI('getMe');
        $me = $this->serializer->denormalize($response, User::class);
        return $me;
    }

    /**
     * @param array $postData
     * @return array POST data prepared for sending
     */
    private function serializePOSTData(array $postData): array
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
    public function sendMessage(Chat $chat, string $text, array $options = null): Message
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
        return $this->serializer->denormalize($response, Message::class);
    }

    /**
     * @param Chat $to Target chat
     * @param Chat $from Chat where the original message was sent
     * @param Message $message Message to forward
     * @param array $options [disable_notification=>bool]
     * @return Message The send Message object
     */
    public function forwardMessage(Chat $to, Chat $from, Message $message, $options = null): Message
    {
        $params = [
          'chat_id' => $to->getId(),
          'from_chat_id' => $from->getId(),
          'message_id' => $message->getMessageId()
        ];

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $params = array_merge($params, $options);
        }

        $response = $this->callAPI('forwardMessage', $params);
        //var_dump($response);
        return $this->serializer->denormalize($response, Message::class);
    }

    public function sendMedia(Chat $chat, File $file): Message
    {
        $params = [
          'chat_id' => $chat->getId()
        ];

        $tmp = explode('\\', get_class($file));
        $entity_name = end($tmp);
        $params[strtolower($entity_name)] = $file->getLocalPath();

        $response = $this->callAPI('send'.$entity_name, $params);
        return $this->serializer->denormalize($response, Message::class);
    }

    /**
     * @param Chat $chat Unique identifier for the target chat
     * @param float $latitude Latitude of location
     * @param float $longitude Longitude of location
     * @param array $options [disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendLocation(Chat $chat, float $latitude, float $longitude, array $options = null)
    {
        $postData = array(
          'chat_id' => $chat->getId(),
          'latitude' => $latitude,
          'longitude' => $longitude
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('sendLocation', $postData);
        return $this->serializer->denormalize($response, Message::class);
    }

    /**
     * @param Chat $chat Target chat
     * @param float $latitude Latitude of the venue
     * @param float $longitude Longitude of venue
     * @param string $title Name of the venue
     * @param string $address Address of the venue
     * @param array $options [foursquare_id=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendVenue(Chat $chat, float $latitude, float $longitude, string $title, string $address, array $options = null)
    {
        $postData = array(
          'chat_id' => $chat->getId(),
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
        return $this->serializer->denormalize($response, Message::class);
    }

    /**
     * @param Chat $chat Target chat
     * @param string $phone_number Contact's phone number
     * @param string $first_name Contact's first name
     * @param array $options [last_name=>string, disable_notification=>bool, reply_to_message_id=>int, reply_markup=>ReplyKeyboardMarkup|ReplyKeyboardHide|ForceReply]
     * @return Message The send Message object
     */
    public function sendContact(Chat $chat, string $phone_number, string $first_name, $options = null)
    {
        $postData = array(
          'chat_id' => $chat->getId(),
          'phone_number' => $phone_number,
          'first_name' => $first_name
        );

        if (isset($options)) {
            $options = $this->serializePOSTData($options);
            $postData = array_merge($postData, $options);
        }

        $response = $this->callAPI('sendContact', $postData);
        return $this->serializer->denormalize($response, Message::class);
    }

    /**
     * @param Chat $chat Target chat
     * @param string $action Type of action to broadcast
     */
    public function sendChatAction(Chat $chat, $action)
    {
        $postData = array(
          'chat_id' => $chat->getId(),
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
        return $this->serializer->denormalize($response, UserProfilePhotos::class);
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
        $updates = $this->serializer->denormalize($response, Update::class . '[]');
        return $updates;
    }

    /**
     * @param array $options [url=>string, certificate=>InputFile]
     * @return bool
     */
    public function setWebHook($options = null)
    {
        return $this->callAPI('setWebhook', $options);
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

        $response = $this->serializer->decode($json, 'json');

        if (!$response['ok']) {
            throw new \Exception($response['description'], $response['error_code']);
        }
        return $response['result'];
    }
}
