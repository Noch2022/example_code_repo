@extends('layouts.master')
<style>
   .sms-room-mgt .sms_room_wrapper{
      width: 100%;
      display: flex;
      min-height: 300px;
      text-align: center;
      flex-wrap: wrap;
      border: 1px groove gray;
      margin-top: 20px;
      border-radius: 5px;
      padding:10px;
   }
   .sms-room-mgt .sms_room_box{
      display: flex;
      margin-top: 5px;
      outline: 1px solid #bdb5b5;
      width: 19.5%;
      min-height: 300px;
      flex-direction: column;
      justify-content: space-between;
      background-color: #e9e9e9;
      margin: 0.25%;
   }
   .sms-room-mgt .sms_room_box .header{
      background-color: #9b9999;
    height: 30px;
    text-align: center;
    line-height: 30px;
    color: white;
    font-size: 18px;
    font-weight: bold;
   }
   .sms-room-mgt .single_room_container{
      display: flex;
      padding-top: 0px;
      flex-direction: column;
   }
  
   .sms-room-mgt .defaultCollectionSet{
      width: 100%;
      display: flex;
      justify-content: start;
      min-height: 80px;
      align-items: center;
      text-align: center;
      flex-wrap: wrap;
      outline: 1px solid gray;
      padding: 10px;
      border-radius: 5px;
   }
   .sms-room-mgt .student_item{
      background: #cbc9c5;
    height: 30px;
    display: flex;
    flex-direction: row;
    align-items: center;
    margin: 3px;
    border-radius: 3px;
    min-width: 150px;
   }
   .sms-room-mgt .student_item img{
      width: 25px;
      height: 25px;
      object-fit: cover;
      margin:5px;
   }
  
   .sms-room-mgt .warehouse_drop_zone{
      padding-top: 0px;
      border: 1px dashed #e11313;
      padding-bottom: 40px;
   }
</style>
<script>

   function allowDrop(ev) {
     ev.preventDefault();
   }
   
   function drag(ev) {
     ev.dataTransfer.setData("text", ev.target.id);
   }
   
   function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      var e = ev;
      let eoffset = $(e.target).offset();
      let h = parseInt( $(e.target).css("height").replace("px",""));
      let wscrolltop = $(window).scrollTop();
      let wscrollleft = $(window).scrollLeft();
      console.log("-----------");
      console.log("H:" + h);
      console.log("wscrolltop:" + wscrolltop);
      console.log("wscrollleft:" + wscrollleft);
      var attr = $(e.target).attr('customID');
  
      if(typeof attr !== 'undefined' && attr !== false){
            if((eoffset.top - wscrolltop) + (h/2) > e.pageY){
               console.log("It is before");
               console.log($(e.target).children().first());
               if($(e.target).children().length > 0){
                  $(e.target).children().first().before(document.getElementById(data));               
               }else{
                  // $(e.target).before(document.getElementById(data));
                  $(e.target).after(document.getElementById(data));
               }
              
            }else{
               console.log("It is after");
               
               if($(e.target).children().length > 0){
                  console.log($(e.target).children());
                  $(e.target).children().last().after(document.getElementById(data));
               }else{
                  $(e.target).after(document.getElementById(data));
               }               
            }
      }
      
   }
   </script>
@section('body_content')
<div class="sms-row sms-room-mgt">
   <div class="defaultCollectionSet" id="defaultCollectionSet" customID="defaultCollectionSet_id" ondrop="drop(event)" ondragover="allowDrop(event)" >
      @for($i=1;$i<=15;$i++)
      <div class="student_item" id="drag{{$i}}" customID="dragID{{$i}}" draggable="true" ondragstart="drag(event)"        >
         <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Picture.png" />
         <span class="stu_name">Rotina Lim {{$i}}</span>
      </div>
      @endfor
   </div>
   <div class="sms_room_wrapper">   
      @if(isset($items) && sizeof($items) > 0)
         @foreach($items as $index=>$item)
            <div class="sms_room_box" >
               <div class="row_box">
                  <div class="header">
                     <p>{{$item->room_name}}</p>
                  </div>
                  <div class="single_room_container" >
                     <div class="warehouse_drop_zone" id="drop{{$item->id}}"  customID="drop{{$item->id}}" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>
                  </div>                  
               </div>
            </div>
         @endforeach
      @endif
   </div>
</div>
@endsection