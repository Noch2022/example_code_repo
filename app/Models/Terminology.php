<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminology extends Model
{
    use HasFactory;

































































    public static function getTerminologyParentByID($id){
        $result = Terminology::where('parent_id',$id)->first();
        if(isset($result)){
          return $result->name;
        }
        return null;
    }

    public static function countTerminologyChildByParentCode($terminology_code){
        try{
            $result = Terminology::where('terminology_code',$terminology_code)->first();
            if(isset($result)){
              $parentID = $result->id;
              return Terminology::where('parent_id',$parentID)->count();
            }            
        }catch(Exception $ex){

        }
        return 0;
        
    }

    public static function getTerminologyParentDropDownList($value=0){
        $results = Terminology::where('parent_id',0)
                ->where('status',1)
                ->get();
        $str = '';
        if(isset($results)){
            
          $str .='<select name="parent_id" class="form-control">';
          $str .= '<option value="0">Select Parent Below</option>';
            foreach($results as $result){
                $selected = ($result->id == $value) ? 'selected' :'';
                $str .='<option '.$selected.' value='.$result->id.'>'.$result->name.'</option>';
            }
          $str .='</select>';
        }
        
        return $str;
    }

    public static function getTerminologyListByTerminologyCode($terminology_code)
    {
        try{           
            $result = Terminology::where('status',1)
                        ->where('terminology_code',$terminology_code)
                        ->first();
            if(isset($result)){
                $parentID = $result->id;
                $results = Terminology::where('status',1)
                            ->where('parent_id',$parentID)
                            ->get();
                if(isset($results)){
                    return $results;
                }
            }
        }catch(Exception $ex){

        }
        return null;
    }


}
