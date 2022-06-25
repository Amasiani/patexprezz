<?php
namespace App\Helpers;


    function  TrackingIdGenerator($model, $trow,  $prefix, $length= 8)
    {
        $data = $model::orderBy('id', 'desc');
        if(!$data){
            $og_length = $length;
            $last_number = "";
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $intial_last_number = ($code/1)*1;
            $increment_last_number = $intial_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix. "-" .$zeros.$last_number;
    }
