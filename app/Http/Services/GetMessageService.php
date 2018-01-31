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
        
        $this->client = new CurlHTTPClient(env('mD3Sqptc5f9R9huvfUsYIn1p1Ptxlu4DcBleoa58OuFlLmLpRtPeWgI4gSnPCkl9IWXGKX10nBr+tQWd02aTW07B1vnXoDb+85qY5vJC2EvpMcWwpKyS8uvgm07qEBciplKXnKXfcQ84F0akINdTrQdB04t89/1O/w1cDnyilFU=');
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('dea55b0bcff86c1c10fcccdc8b7454cc

')]);
        



        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}