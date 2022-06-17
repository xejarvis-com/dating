<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function filterConditionalArray($array)
    {
        $title = "";
// dd($array);
        foreach ($array as $key => $value) 
        {

            if($value == "0")
            {
                unset($array[$key]);
            }
            else
            {
                // $title.=ucwords($value).' ';
            }
       }

       return [$array,$title];
    }
}
