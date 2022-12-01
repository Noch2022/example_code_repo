<?php

use Illuminate\Support\Facades\Route;
use PHPJasper\PHPJasper;  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return redirect('reports');
    return view('home');
});
Route::get('calendar_chart','ChartController@calendarChart');
Route::get('pie_chart','ChartController@pieChart');
Route::get('column_chart','ChartController@columnChart');
Route::get('area_chart','ChartController@areaChart');
Route::get('vega_chart','ChartController@vegaChart');
Route::get('scatter_chart','ChartController@scatterChart');
Route::get('all_chart','ChartController@allChart');
Route::resource('room','RoomController');

Route::resource('videos','VideoController');

Route::resource('reports','ReportController');
Route::get('printAll','ReportController@printAll');
Route::get('printOne/{privilledgeID}','ReportController@printOne');
Route::get('/java', function () {
    try{
    $input = '/home/sodexs/JaspersoftWorkspace/MyProject/Blank_A4.jrxml';   
        $output = '/home/sodexs/JaspersoftWorkspace/MyProject';
        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => [],
            'db_connection' => [
                'driver' => 'mysql',
                'username' => 'usr',
                'password' => 'usr',
                'host' => '127.0.0.1',
                'database' => 'laravel',
                'port' => '3306'
            ]
        ];
        $jasper = new PHPJasper;

        $jasper->process(
                $input,
                $output,
                $options
        )->execute();
    }catch(\Exception $ex){
        dd($ex->getMessage());
    }


});


Route::get('/detail/{privilledgeID}', function ($privilledgeID) {
    try{
    $input = '/home/sodexs/JaspersoftWorkspace/MyProject/Detail.jrxml';   
        $output = '/home/sodexs/JaspersoftWorkspace/MyProject';
        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => ['privilledgeID'=>$privilledgeID],
            'db_connection' => [
                'driver' => 'mysql',
                'username' => 'usr',
                'password' => 'usr',
                'host' => '127.0.0.1',
                'database' => 'laravel',
                'port' => '3306'
            ]
        ];
        $jasper = new PHPJasper;

        $jasper->process(
                $input,
                $output,
                $options
        )->execute();
    }catch(\Exception $ex){
        dd($ex->getMessage());
    }


});
Auth::routes();
Route::resource('terminology','TerminologyController');
Route::post('/addNewTerminology','TerminologyController@addNewTerminology');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('position','PositionController');


Route::get('test',function(){
    return view('encrypt_and_decrypt');
});