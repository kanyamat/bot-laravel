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
        
        $this->client = new CurlHTTPClient(env('cBVPEkhPN862OfgebfUG1sU1iBwk8N/Dq/Pxd5Exp3ptoOfVBuCBYYMgAsQELJunIWXGKX10nBr+tQWd02aTW07B1vnXoDb+85qY5vJC2EsnPXQKUypoTqQ7Xx2DLPs1vNVF2CUCX+wOvvh5IpmNMQdB04t89/1O/w1cDnyilFU='));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('df081e404b4755b307fed6a49ceeb8b6
')]);
        



        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}