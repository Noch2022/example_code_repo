<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class VideoController extends Controller
{
    public function index(Request $request)
    {
        try{
            // https://www.googleapis.com/youtube/v3
            // AIzaSyCJLCVliKgbOI4NKg2wvamT8DvmfYF1OGg
            /*'youtube' => [
                'api_key' => env('API_KEY'),
                'endpoint' => env('YOUTUBE_ENDPOINT')
            ],*/

           /* API_KEY="AIzaSyCJLCVliKgbOI4NKg2wvamT8DvmfYF1OGg"
            YOUTUBE_ENDPOINT="https://www.googleapis.com/youtube/v3"*/

            
            $params =   [
                            'query' => [
                                'key' => config('services.youtube.api_key'),
                                'part' => 'snippet',
                                'channelId' => 'UC1PQQ08exYZG2xEWDjFpWsQ',
                                // 'id' => 'HSlon_3VBn4',
                                'maxResults' => 20,
                                'order' => 'viewCount'
                            ]
                        ];
            /*
            1. search
            2. videos
            3. playlists
            4. channels
            5. comments
            */
            $url = config('services.youtube.endpoint').'/search';
            $results = $this->apiGetMethodCalling($params,$url);
            dd($results);
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }


    public  function apiGetMethodCalling($params,$url)
    {
        try{
            $accessName     = '';
            $accessToken    = '';
            $client         = new \GuzzleHttp\Client(['headers' => [
                                                'access-name'   => $accessName,
                                                'access-token'  => $accessToken,
                                                'Connection'    => 'close',
                                                'Content-Type'  => 'application/json'
                                                ]
                                            ]);
            $response = $client->request('GET',$url,$params);
            $response = $response->getBody()->getContents();
            $response = json_decode($response);
            return $response;
            }catch (\GuzzleHttp\Exception\ConnectException $e){

            }
    }

    public function create()
    {
        
    }
    public function store(Request $request)
    {
        //
    }

 
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
   
}
