<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        /* @font-face {
            font-family: AKbalthom;
            src: url(fonts/AKbalthom/AKbalthom.ttf);
        } */
        *{
            font-size: 12px;
            font-family: 'akbalthom';
        }
        .font1,.font2{
            font-family: 'akbalthom';
        }
        .title{
            font-size: 12px;
        }

        div{
            display: block;
        }
        h1,h2{
            padding:0px;
            margin:3px;
        }

        .payment_inv_wrapper{
            margin:0 auto;
        }
        .fillin_text{
        }

        /* --------------------------------------------------------- */
        .row_one{
            border-bottom: 1px solid red;
            padding-bottom: 5px;
        }
        .row_one .b_one{
            width: 30%;
            float: right;
            text-align: center;
            outline: 1px solid gray;
           
        }
        .row_one .b_one .preahreachea{
            font-size: 14px;
        }
        .row_one .b_one .cheat_sasna{
            font-size: 13px;
        }
        .row_one .b_one .symbol{
            width: 60px;
        }

        .row_one .b_two{          
            width: 70%;
            float: left;
            outline:1px solid gray;
        }
        .row_one .b_two .centerBlock{
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            width:250px;
            outline:1px solid red;
            /* margin-top: 0px; */
        }
       












        .row_footer{
            padding-top: 5px;
            border-top: 1px solid red;
            text-align: center;
            font-size: 12px;
            font-weight: normal;
            position: absolute;
            bottom: 0px;
        }



  </style>
</head>
<body>
    <div class="payment_inv_wrapper" style="width:95%">
        <div class="row_one">
            <div class="b_one">
                <h1 class="font1 preahreachea">ព្រះរាជាណាចក្រកម្ពុជា</h1>
                <h1 class="font1 cheat_sasna">ជាតិ សាសនា ព្រះមហាក្សត្រ</h1>
                <img class="symbol" style="height:10px;width:100px" src="https://w7.pngwing.com/pngs/936/210/png-transparent-star-horizontal-line-decoration-elements-star-horizontal-line-category-decoration-thumbnail.png" />
            </div>

            <div class="b_two">
                <div class="centerBlock">
                    <img style="width: 60px" class="logo" src="https://pbs.twimg.com/profile_images/1593437227039662081/OmUOYlF4_400x400.jpg"/>
                    <h1 class="font1" style="font-size:14px">វិទ្យាល័យម៉ាអាហាទហាជីហ្វីកក្រី</h1>
                    <h1 class="font1_en" style="font-size:13px">MAAHAD HAJI FICKRY HIGH SCHOOL</h1>
                </div>
            </div>
        </div>

        <div class="row_two">
            <div class="b_one">
                <p style="text-align:right;padding-top:5px;padding-bottom:5px">
                    <span class="font1_en" style="font-size: 14px;font-weight:bold">No</span>
                    <span class="font1_en" style="border-bottom: 1px dotted gray;padding:3px">20230009</span>
                </p>
            </div>
        </div>

        <div class="row_three">
            <h1 class="font1" style="font-size: 18px;text-align:center">វិក័យប័ត្របង់វិភាគទាន</h1>
        </div>

        <div class="row_four">
            <p class="font2">
                <span class="normal_text"> ខ្ញំុបាទ/នាងខ្ញំុឈ្មោះ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> អក្សរឡាតាំង </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ភេទ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ជនជាតិ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> សញ្ជាតិ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> កេីតថ្ងៃទី </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> េនៅភូមិ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ឃំុ/សង្កាត់ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ស្រុក/ខណ្ឌ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ខេត្ត/ក្រុង </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> សូមបង់ជាវិភាគទានជូន វិទ្យាល័យម៉ាអាហាទហាជីហ្វីកក្រី ចំនួន</span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ជាអក្សរ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> ជាអក្សរ </span><span class="fillin_text">.....................</span>
                <span class="normal_text"> េដីម្បីចូលរៀនចំេនះទូេទៅ និង សាសនាឥស្លាមក្នុងឆ្នាំសិក្សា </span><span class="fillin_text">.....................</span>
            </p>
        </div>

        <div class="row_five">
            <div class="b_one">
                <p class="font1">  <span class="normal_text"> ជំនីក ថ្ងៃទី</span><span class="fillin_text"></p>
                <h2 class="font1">  <span class="normal_text" style="font-size: 14px"> ហត្ថលេខានិងឈ្មោះអ្នកទទួល</span><span class="fillin_text"></h2>
                <div class="signature_block">
                        .....
                </div>
            </div>
            <div class="b_two">
                <p class="font1">  <span class="normal_text"> ជំនីក ថ្ងៃទី</span><span class="fillin_text"></p>
                <h2 class="font1">  <span class="normal_text" style="font-size: 14px"> ហត្ថលេខានិងឈ្មោះអ្នកប្រគល់</span><span class="fillin_text"></h2>
                <div class="signature_block">
                        .....
                </div>
            </div>
        </div>

        <div class="row_six row_footer">
            <p class="font2">អាស័យដ្ឋាន ភូមិបន្ទាយ ឃំុជំនីក ស្រុកក្រូចឆ្មារ ខេត្តត្បូងឃ្មំុ ទូរស័ព្ទ៖ 097 78 79 332 / 015 94 56 66 / 077 78 79 33</p>
        </div>

    </div>

</body>
</html>



