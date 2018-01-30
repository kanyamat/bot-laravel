<?php
namespace App\Http\Services;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
class GetMessageService
{
    /**
     * @var LINEBot
     */
    private $bot;
    /**
     * @var HTTPClient
     */
    private $client;
    
    
    public function replySend($formData)
    {
        $replyToken = $formData['events']['0']['replyToken'];
        
        $this->client = new CurlHTTPClient(env('wmIjTcjhN/Lz+dQUSyeDOzeEoJOeNZtedn/jv0+BaQdsLP/6dq1DBguONVNxVYWpIWXGKX10nBr+tQWd02aTW07B1vnXoDb+85qY5vJC2EtYfaRqO/tCKdkf6eOzQhbjxTN7iikR/P1kn/2g/2NukAdB04t89/1O/w1cDnyilFU='));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('df081e404b4755b307fed6a49ceeb8b6
')]);
        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}