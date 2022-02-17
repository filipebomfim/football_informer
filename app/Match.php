<?php

namespace App;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use NklKst\TheSportsDb\Client\ClientFactory;

class Match extends Model
{
    //
    private $reqPrefs, $stream_context;

    public function __construct(){
        $this->reqPrefs['http']['header'] = 'X-Auth-Token: 5afa385de30b461787b50e1341ef0a2c';
        $this->stream_context = stream_context_create($this->reqPrefs);
    }

    public function getMatchesByDate($dateIni, $dateLast){
        $uri = "http://api.football-data.org/v2/matches/?dateFrom=$dateIni&dateTo=$dateLast";
        $this->reqPrefs['http']['method'] = 'GET';
        $this->stream_context = stream_context_create($this->reqPrefs);
        $response = file_get_contents($uri, false, $this->stream_context);
        $matches = json_decode($response);
        return $matches;
    }

    /*
    public function getMatchesByDate($dateIni, $dateLast){
        $uri = "http://api.football-data.org/v2/matches/?dateFrom=$dateIni&dateTo=$dateLast";        
        $response = $this->client->get($uri, $this->header);
        return json_decode($response->getBody()->getContents(), true);
    }
    */
}
