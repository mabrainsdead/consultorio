<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvideContr extends Controller
{
    public function cont_sangue(Request $request){
        $lab_array = array();
        foreach ($request->lab as $labitem)
        {
            $lab_array[] = $labitem;
        }

        return view('print_sangue', ['result_array'=>$lab_array]);
    }

    public function cont_imagem_met_graf(Request $request){
        $img_array = array();
        foreach ($request->img as $item)
        {
            $img_array[] = $item;
        }

        return view('print_imagem_met_graf', ['result_array'=>$img_array]);
    }
}
