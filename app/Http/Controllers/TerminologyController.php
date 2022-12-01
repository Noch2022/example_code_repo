<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terminology;

class TerminologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Terminology::where('status',1)
                ->where('parent_id',0)
                ->paginate(10);
        return view('terminology.index',compact(['items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentDropDown = Terminology::getTerminologyParentDropDownList();
        return view('terminology.create',compact(['parentDropDown']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $parentID = $request->parent_id;
            if($parentID == 0){
                $terminology_code = $request->terminology_code;
            }else{
                $name=preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
                $terminology_code = $parentID."_".$name;
            }
           
            $item = new Terminology([                        
                        "name"          => $request->name,
                        "description"         => $request->description,
                        "terminology_code" => $terminology_code,
                        "parent_id" => $parentID,
                        "thumbnail" => "",
                        "lang_code"         => 'en',
                        "status"        => 1,
                        "author"    => \Auth::user()->id
                    ]);  
            $result = $item->save();
        }catch(Exception $ex){

        }
        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subItems = Terminology::where('status',1)
                ->where('parent_id',$id)
                ->paginate(10);
        return view('terminology.show',compact(['subItems']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $item = Terminology::findOrFail($id);
            $parentID = $item->parent_id;
            $parentDropDown = Terminology::getTerminologyParentDropDownList($selected=$parentID);            
            return view('terminology.edit',compact(['parentDropDown','item']));
        }catch(Exception $ex){

        }
        
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
        $item       = Terminology::findOrFail($id);
        $parentID = $request->parent_id;
        if($parentID == 0){
            $terminology_code = $request->terminology_code;
        }else{
            $name=preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
            $terminology_code = $parentID."_".$name;
        }

        if ( $item ) {
            $item->id          =   $id;
            $item->name        =   $request->name;
            $item->description =   $request->description;
            $item->parent_id   = $parentID;
            $item->terminology_code = $terminology_code;
            $item->author   =   \Auth::user()->id;
            $item->save(); 
        }
        return redirect('/terminology');
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



    public function addNewTerminology(Request $request)
    {
        try{           
            $terminology_code = $request->terminology_code;
            $parentID = 0;
            $result = Terminology::where('status',1)
                        ->where('terminology_code',$terminology_code)
                        ->first();
            if(isset($result)){
                $parentID = $result->id;
                $name=preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
                $terminology_code = $parentID."_".$name;
                $item = new Terminology([                        
                    "name"          => $request->name,
                    "description"         => $request->description,
                    "terminology_code" => $terminology_code,
                    "parent_id" => $parentID,
                    "thumbnail" => "",
                    "lang_code"         => 'en',
                    "status"        => 1,
                    "author"    => \Auth::user()->id
                ]);  
                $result = $item->save();
            }
        }catch(Exception $ex){

        }
        return \Redirect::back();
    }

   
}
