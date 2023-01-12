<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConverterController extends Controller
{

    public function moveFile(){
        $dest = base_path() . '/vendor/geekcom/phpjasper-laravel/bin/jasperstarter/jdbc/XXXXXMyAkbalthom.jar';
        $src = base_path().'/public/XXXXXMyAkbalthom.jar';
        echo $dest."<br/>";
        echo $src;
        copy($src,$dest);
        dd("Move file successfully...");
        // MyAkbalthom.jar
        // vendor/geekcom/phpjasper-laravel/bin/jasperstarter/jdbc
        // mix.copy("/MyAkbalthom.jar","vendor/geekcom/phpjasper-laravel/bin/jasperstarter/jdbc/MyAkbalthom.jar");
        // echo "This is move file...";
    }
    
    public function dateConverter(){
        $para ="2022-08-19 10:01:50";
        $date = date('d-m-Y', strtotime($para));
        echo $this->convertToEnglishDate($date);
        echo '<br/>';
        echo $this->convertToKhmerDate($date);
    }

    public function convertToEnglishDate($date){
       
        $year = \Carbon\Carbon::parse($date)->format("Y");
        $month = intval(\Carbon\Carbon::parse($date)->format("m"));
        $day = intval(\Carbon\Carbon::parse($date)->format("d"));
        $result = $day." ".$this->getMonthInEnglishByNumber($month)." ".$year;
        return $result;
    }

   

    public function convertToKhmerDate($date){
       
        $year = \Carbon\Carbon::parse($date)->format("Y");
        $month = intval(\Carbon\Carbon::parse($date)->format("m"));
        $day = intval(\Carbon\Carbon::parse($date)->format("d"));
        $result = $this->n2nKH($day)." ".$this->getMonthInKhmerByNumber($month)." ".$this->n2nKH($year);
        return ($result);
    }

    public function n2nKH($number){
        $arrayOrigin = [0,1,2,3,4,5,6,7,8,9];
        $arrayCon = ["០","១","២","៣","៤","៥","៦","៧","៨","៩"];
        for($i=0;$i<sizeof($arrayOrigin);$i++){
            $number = str_replace($arrayOrigin[$i],$arrayCon[$i],$number);
        }
        return $number;
    }


    public function getMonthInEnglishByNumber($month=1){
        $monthStr = '';
        switch ($month) {
            case 1:
                    $monthStr = 'Jan';
                    break;
            case 2:
                    $monthStr = 'Feb';
                    break;
            
            case 3:
                    $monthStr = 'Mar';
                    break;
            case 4:
                    $monthStr = 'Apr';
                    break;
            case 5:
                    $monthStr = 'May';
                    break;
            case 6:
                    $monthStr = 'Jun';
                    break;
            
            case 7:
                    $monthStr = 'Jul';
                    break;
            case 8:
                    $monthStr = 'Aug';
                    break;
            case 9:
                    $monthStr = 'Sep';
                    break;
            case 10:
                    $monthStr = 'Oct';
                    break;
            case 11:
                    $monthStr = 'Nov';
                    break;
            
            case 12:
                    $monthStr = 'Dec';
                    break;

            default:
                    $monthStr = 'Jan';
        }
        return $monthStr;
    }

    public function getMonthInKhmerByNumber($month=1){
        $monthStr = '';
        switch ($month) {
            case 1:
                    $monthStr = 'មករា';
                    break;
            case 2:
                    $monthStr = 'កុម្ភៈ';
                    break;
            
            case 3:
                    $monthStr = 'មីនា';
                    break;
            case 4:
                    $monthStr = 'េមសា';
                    break;
            case 5:
                    $monthStr = 'ឧសភា';
                    break;
            case 6:
                    $monthStr = 'មិថុនា';
                    break;
            
            case 7:
                    $monthStr = 'កក្កដា';
                    break;
            case 8:
                    $monthStr = 'សីហា';
                    break;
            case 9:
                    $monthStr = 'កញ្ញា';
                    break;
            case 10:
                    $monthStr = 'តុលា';
                    break;
            case 11:
                    $monthStr = 'វិច្ឆិកា';
                    break;
            
            case 12:
                    $monthStr = 'ធ្នូ';
                    break;

            default:
                    $monthStr = 'មករា';
        }
        return $monthStr;
    }

    public function amountConverter($number){
        $amount = $number;
        echo  '<h1>'.$amount."</h1>";
        return $this->convert_number_to_words($amount);
        echo "This is amount converter...";
    }

    function convert_number_to_words($number) {

        // $hyphen      = '-';
        // $conjunction = ' and ';
        // $conjunction = ' and ';
        // $separator   = ', ';
        // $negative    = 'negative ';
        // $decimal     = ' point ';

        $hyphen      = '';
        $conjunction = '  ';
        $conjunction = '  ';
        $separator   = '  &nbsp;&nbsp; ';
        $negative    = ' ';
        $decimal     = '  និង ';


        $dictionary  = array(
            0                   => 'zero',
            1                   => 'មួយ',
            2                   => 'ពីរ',
            3                   => 'បី',
            4                   => 'បួន',
            5                   => 'ប្រាំ',
            6                   => 'ប្រាំមួយ',
            7                   => 'ប្រាំពីរ',
            8                   => 'ប្រាំបី',
            9                   => 'ប្រាំបួន',
            10                  => 'ដប់',
            11                  => 'ដប់មួយ',
            12                  => 'ដប់ពីរ',
            13                  => 'ដប់បី',
            14                  => 'ដប់បួន',
            15                  => 'ដប់ប្រាំ',
            16                  => 'ដប់ប្រាំមួយ',
            17                  => 'ដប់ប្រាំពីរ',
            18                  => 'ដប់ប្រាំបី',
            19                  => 'ដប់ប្រាំបួន',
            20                  => 'ម្ភៃ',
            30                  => 'សាបសិប',
            40                  => 'សែសិប',
            50                  => 'ហាសិប',
            60                  => 'ហុកសិប',
            70                  => 'ចិតសិប',
            80                  => 'ប៉ែតសិប',
            90                  => 'កៅសិប',
            100                 => 'រយ  ',
            1000                => 'ពាន់',
            10000                => 'ម៉ឺន',
            100000             => 'សែន',
            1000000             => 'លាន',
            10000000          => 'កោដ'
        );
    
        if (!is_numeric($number)) {
            return false;
        }
    
        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }
    
        if ($number < 0) {
            return $negative . $this->convert_number_to_words(abs($number));
        }
    
        $string = $fraction = null;
    
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
    
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . $this->convert_number_to_words($remainder);
                }
                break;
            case $number < 100000:
                $thousands   = ((int) ($number / 1000));
                $remainder = $number % 1000;
    
                $thousands = $this->convert_number_to_words($thousands);
    
                $string .= $thousands . ' ' . $dictionary[1000];
                if ($remainder) {
                    $string .= $separator . $this->convert_number_to_words($remainder);
                }
                break;
            // ----------------------------------------------custom------------------------------------
            case $number < 1000000:
                $thousands   = ((int) ($number / 10000));
                $remainder = $number % 10000;
    
                $thousands = $this->convert_number_to_words($thousands);
    
                $string .= $thousands . ' ' . $dictionary[10000];
                if ($remainder) {
                    $string .= $separator . $this->convert_number_to_words($remainder);
                }
                // echo "--".$thousands."---";
                break;


            case $number < 10000000:
                $lakhs   = ((int) ($number / 1000000));
                $remainder = $number % 1000000;
    
                $lakhs = $this->convert_number_to_words($lakhs);
    
                $string = $lakhs . ' ' . $dictionary[1000000];
                if ($remainder) {
                    $string .= $separator . $this->convert_number_to_words($remainder);
                }
                break;
            case $number < 1000000000:
                $crores   = ((int) ($number / 10000000));
                $remainder = $number % 10000000;
    
                $crores = $this->convert_number_to_words($crores);
    
                $string = $crores . ' ' . $dictionary[10000000];
                if ($remainder) {
                    $string .= $separator . $this->convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = $this->convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= $this->convert_number_to_words($remainder);
                }
                break;
        }
        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal .$this->convert_number_to_words($fraction);
            // $string .= $decimal;
            // $words = array();
           
            // foreach (str_split((string) $fraction) as $number) {
            //     $words[] = $dictionary[$number];
            // }
            // $string .= implode(' ', $words);
        }
    
        return $string;
    }
}
