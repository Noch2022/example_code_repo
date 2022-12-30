<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MaximilianRadons\LaravelStrapi\LaravelStrapi;



class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function clearArtisan(){
       
     }

    public function convertAttributes($items){
        dd($items);
    }

    public function index(Request $request)
    {
        $strapi = new LaravelStrapi();
        $menus = $strapi->collection('menus');
        $menus =  ($menus["data"]);
        // foreach($menus as $menu){
        //     $menu = (object) $menu["attributes"];
        // }
        // dd($menus);  
        // ?populate[0]=firstSection&populate[1]=firstSection.socialMedia&populate[2]=firstSection.bgImg&populate[4]=secondSection
        $query = [
            'populate' => [
                'firstSection',
                'firstSection.socialMedia',
                'firstSection.bgImg',
                'secondSection'
            ]
        ];
        $page = $strapi->query($query)->single('home-page');
        dd($page);
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
