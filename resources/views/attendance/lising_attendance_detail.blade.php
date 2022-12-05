@extends('layouts.master')
<style>
    .sms_att_daily_operation{
        position: relative;
    }
    .sms_att_daily_operation .table{
        background: #c3c3c3;
    }
    .sms_att_daily_operation thead tr{
        height: 35px;
    }
    .sms_att_daily_operation  td,.sms_att_daily_operation  th{
        vertical-align: middle !important;
        text-align: center;
        font-size: 12px;
        padding:3px !important;
        /* border: 1px dotted green !important; */
        border: 1px dotted #215078 !important;
    }
    .sms_att_daily_operation td *,.sms_att_daily_operation th *{
        padding:5px !important;
        
    }
    .sms_att_daily_operation .textCenter{
        text-align: center;
    }
    .sms_att_daily_operation .textLeft{
        text-align: left;
    }
    .sms_att_daily_operation .textRight{
        text-align: right;
    }
    .sms_att_daily_operation .sms_radio{
        width: 20px;
        height: 20px;
    }
    .sms_att_daily_operation .take_note{
        border: none;
        border-bottom: 1px solid #72747a;
        border-radius: 0px;
        padding: 4px 0px !important;
        background: none !important;
        width: 80%;
        display: inline-block;
    }
    .sms_att_daily_operation .take_note:focus{
        outline: none;
        color: green;
        border-bottom:1px solid green;
    }
    .sms_att_daily_operation .take_note::placeholder{
        color:gray;
        
    }
    .sms_att_daily_operation .edit_icon{
        color:#172754;
    }
    .w100{
        width: 100px;
    }
    .w200{
        width: 200px;
    }
    .w300{
        width: 300px;
    }
    .w400{
        width: 400px;
    }
    .sms_att_daily_operation .sms_main_info{
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
        background: #0b0a44;
        height: 50px;
        line-height: 50px;
        margin-bottom: 20px;
    }
    .sms_att_daily_operation .dflex{
        display: flex;
    }
    .sms_att_daily_operation .dflex p{
        /* min-width: 200px; */
    }
    .sms_att_daily_operation .sms_main_info .submit_action{
        height: 40px;
        line-height: 40px;
        font-size: 16px;
        margin-top: 5px;
        margin-right: 5px;
        border-radius: 5px;
        color: green;
        font-weight: 600;
    }
    .sms_att_daily_operation .text_current_date{
        color: white;
        font-weight: 600;
        padding-left: 15px;
        margin-right: 15px;
 
        
    }
    .sms_att_daily_operation .current_date{
        height: 40px;
        margin-top: 5px;
        width: 300px;
        background: unset;
        border-radius: unset;
        border: none;
        color: white;
        font-size: 13px;
        font-weight: 600;
        border-bottom: 1px solid gray;
    }
    .sms_att_daily_operation .current_date:focus{
        outline: none;
    }
</style>

@section('body_content')
<div class="row">
    <div class="sms_att_daily_operation">
        <form action="" name="" id="" method="">
            <div class="sms_row sms_main_info">
                <div class="dflex">
                    <p class="text_current_date">Emp_001:</p>
                    <input type="text" class="current_Date"/>
                </div>


            </div>
            <table class="table table-bordered table-collapsed table-striped">
                <thead>
                    <tr>
                        <th rowspan="2" style="width: 15%" class="textCenter">Date</th>
                        <th colspan="4" class="textCenter">Attendance</th>
                        <th rowspan="2" style="width: 30%"  class="">Note</th>
                    </tr>
                    <tr>
                        <th class="textCenter">Present</th>
                        <th class="textCenter">Absent</th>
                        <th class="textCenter">Excused</th>
                        <th class="textCenter">Late</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=1;$i<=12;$i++)
                    <tr>
                        <td class="textCenter"> {{$i}}-Jan-2022</td>
                        <td class="textCenter">
                            <label><input disabled type="radio" class="sms_radio" value="p" name="attendance{{$i}}[]"/></label>
                        </td>
                        <td class="textCenter">
                            <label><input disabled type="radio" class="sms_radio" value="a" name="attendance{{$i}}[]"/></label>
                        </td>
                        <td class="textCenter">
                            <label><input  disabled type="radio" class="sms_radio" value="e" name="attendance{{$i}}[]"/></label>
                        </td>
                        <td class="textCenter">
                            <label><input disabled type="radio" checked class="sms_radio" value="l" name="attendance{{$i}}[]"/></label>
                        </td>
                        <td>
                            <div class="view_operation">
                               <a href="#">Stomachache at home</a>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>

            </table>
        </form>
    </div>
</div>
@endsection