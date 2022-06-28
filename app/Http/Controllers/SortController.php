<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SortController extends Controller
{
    //
    public function sort_algo(Request $request)
    {

        $form_input = $request->input('vals');

        $arr = explode(",", $form_input);
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            for ($j = 0; $j < $len - $i - 1; $j++)
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
        }


        return $arr;
    }
}
