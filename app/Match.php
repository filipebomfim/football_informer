<?php

namespace App;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    private $json;
    private $stream_context;
    private $client, $header;

    public function __construct(){
        $this->client = new Client();
        $this->header = array('headers' => array('X-Auth-Token' => '5afa385de30b461787b50e1341ef0a2c'));
    }

    public function getMatchesByDate($dateIni, $dateLast){
        $uri = "http://api.football-data.org/v2/matches/?dateFrom=$dateIni&dateTo=$dateLast";        
        $response = $this->client->get($uri, $this->header);
        return json_decode($response->getBody()->getContents(), true);
    }
}
