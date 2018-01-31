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
        
        $this->client = new CurlHTTPClient(env('ftzTyvy/eLkPnrFnJeB9ML3MburnMJVmJqSlY3MJH8ADKzMLvkc1367BYHfZNN/nIWXGKX10nBr+tQWd02aTW07B1vnXoDb+85qY5vJC2Et5oJ/+07/5Vf3tk/fjz6Z6N35X6/o49J8euSDfp+q53QdB04t89/1O/w1cDnyilFU=');
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('dea55b0bcff86c1c10fcccdc8b7454cc

')]);
        



        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}