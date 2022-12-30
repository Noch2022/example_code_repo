<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    //php
use Dbfx\LaravelStrapi\LaravelStrapi;

class StrapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $token = $request->bearerToken();
        // dd($token);

        $token = "faf226cbb81038f4181e25f75634aa8957d42f64170a0ed490f39fd24086827839763686d02dcb3dfe92b9a09c435d7f009bef0476bb63809152b8b01a5ae3f6419a34624df208d46f4b64e82bf4d0fd7965440bb4799ca51ce7fa0e74b2fd3953521d9c80f961095148a521dd34b00cf5d468325d34ddbee272191c6ca5fd26";
        try{
            $params =   [
                'query' => [
                    'last_id'     => 123
                ],
                'headers' => [
                    'Authorization' => 'Bearer '.$token,
                    'Accept' => 'application/json',
                ]
            ];
            $url = "http://localhost:1337/api/menus";
            $menus = null;
            $client = new \GuzzleHttp\Client(['headers' => [
                                                'project-name'  => 'myproject',
                                                'Connection'    => 'close',
                                                'Content-Type'  => 'application/json'
                                            ]
                                        ]);
            $response = $client->request('GET',$url,$params);
            $response = $response->getBody()->getContents();
            $response = json_decode($response);
            if(isset($response)){
                $menus = ($response->data);
                // return $response;
            }
        }catch (\GuzzleHttp\Exception\ConnectException $e){
            dd($e->getMessage());
        }
        return view('strapi.index',compact(['menus']));
    }


    public function homePage(Request $request)
    {
        // $token = $request->bearerToken();
        // dd($token);

        $token = "faf226cbb81038f4181e25f75634aa8957d42f64170a0ed490f39fd24086827839763686d02dcb3dfe92b9a09c435d7f009bef0476bb63809152b8b01a5ae3f6419a34624df208d46f4b64e82bf4d0fd7965440bb4799ca51ce7fa0e74b2fd3953521d9c80f961095148a521dd34b00cf5d468325d34ddbee272191c6ca5fd26";
        try{
            $params =   [
                'query' => [
                    'populate[0]'     => 'firstSection',
                    'populate[1]'     => 'firstSection.socialMedia',
                    'populate[2]'     => 'firstSection.bgImg',
                ],
                'headers' => [
                    'Authorization' => 'Bearer '.$token,
                    'Accept' => 'application/json',
                ]
            ];
            $url = "http://localhost:1337/api/home-page";
            $menus = null;
            $client = new \GuzzleHttp\Client(['headers' => [
                                                'project-name'  => 'myproject',
                                                'Connection'    => 'close',
                                                'Content-Type'  => 'application/json'
                                            ]
                                        ]);
            $response = $client->request('GET',$url,$params);
            $response = $response->getBody()->getContents();
            $response = json_decode($response);
            if(isset($response)){
                dd($response);
                $data = ($response->data);
                dd($data);
            }
        }catch (\GuzzleHttp\Exception\ConnectException $e){
            dd($e->getMessage());
        }
        return view('strapi.homepage',compact(['menus']));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
