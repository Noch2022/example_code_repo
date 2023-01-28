<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privilledges;
use PHPJasper\PHPJasper;  
use \Mpdf\Mpdf as PDF; 
use Illuminate\Support\Facades\Storage;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function mpdf(){
          // Setup a filename 
          $documentFileName = "fun.pdf";
 
          // Create the mPDF document
          $document = new PDF( [
              'mode' => 'utf-8',
              'format' => 'A5',
              'margin_header' => '2',
              'margin_top' => '2',
              'margin_bottom' => '2',
              'margin_footer' => '2',
              'margin_left' => '2',
              'margin_right' => '1',
              'orientation' => 'L'
          ]);   
          $document->setFont("AKbalthom")  ;
   
          // Set some header informations for output
          $header = [
              'Content-Type' => 'application/pdf',
              'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
          ];
   
          $document->WriteHTML(view('reports.invoice'));
        	
        // $ composer require mpdf/mpdf
          // Write some simple Content
        //   $document->WriteHTML('
               
        // ');
           
          // Save PDF on your public storage 
          Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));
           
          // Get file back from storage with the give header informations
          return Storage::disk('public')->download($documentFileName, 'Request', $header); //
     }















    public function index(Request $request)
    {
        $privilledges = Privilledges::paginate(10);
        return view('reports.index',compact(['privilledges']));
    }

    public function printAll(){
        try{ 
                $input = public_path('assets/jasper/Blank_A4.jrxml');
                $output = public_path('assets/jasper/pdf/');
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

                $output = $output."Blank_A4.pdf";
                $file = $filename = "file://".$output;
                header('Content-type: application/pdf');
                header('Content-Disposition: inline; filename="' . $filename . '"');
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');
                readfile($file);

        }catch(\Exception $ex){
            dd($ex->getMessage());
        }
    }

    public function printOne($privilledgeID){
        try{
            // $input = public_path('assets/jasper/Detail.jrxml');
            $input = "/home/sodexs/JaspersoftWorkspace/MyProject/Detail.jrxml";
            $output = public_path('assets/jasper/pdf/');
            $options = [
                'format' => ['pdf'],
                'locale' => 'en',
                'fonts' => public_path('fonts/fontsfamily1672979232214.xml'),
                // 'fonts' => public_path('fonts'), // this part here
                'params' => [
                    'privilledgeID'=>$privilledgeID,
                    'gender' => 'ប្រុស',
                    'image_src' => 'https://image.cnbcfm.com/api/v1/image/104891709-Bill_Gates_the_co-Founder.jpg?v=1558120888'
                ],
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

            $output = $output."Detail.pdf";
            $file = $filename = "file://".$output;
            header('Content-type: application/pdf');
            header('Content-Disposition: inline; filename="' . $filename . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            readfile($file);

        }catch(\Exception $ex){
            dd($ex->getMessage());
        }
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

    public function mediaPrint(){
        return view('mediaPrint',compact([]));
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
