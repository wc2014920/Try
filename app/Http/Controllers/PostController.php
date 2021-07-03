<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
//use http\Env\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function search(request $request){
        $url = $request->query('q');
        $data = "http://drugtw.com/api/drugs?q=".$url;
//        dd($data);
        $data = Http::get($data)->json();

        $drug_name = Arr::get($data, 'drug_table.0.drug_name');//drug_table.0.drug_name
        $drug_pic_arr = Arr::get($data, 'drug_table.0.fig');//drug_table.0.drug_name
        $drug_pic_str = Arr::get($drug_pic_arr, '0');
//        dd($drug_pic_str);//drug_table.0.fig
//        $drug_pic_str;
//        print_r($request);

        return view('home', [
            'pic_url' => $drug_pic_str,//ok
            'drug_name'=>$drug_name
        ]);
//        return response()->json([
//            'pic_url' => $drug_pic_str,
//            'drug_name'=>$drug_name
//        ]);
    }
}
