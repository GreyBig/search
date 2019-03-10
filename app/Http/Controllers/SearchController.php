<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datas;

class SearchController extends Controller
{
    public function search()
    {
        return view('static_pages.search');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'phonenumber' => 'required|max:11|min:11',
        ]);
        $num = $request->phonenumber;
        //$sum=0; //设变量
        $sum = array_sum(str_split($num));
        // foreach($arr as $value){
        //     echo $value.'<br>';
        //     $sum+=$value;//累加
        // }
        if ( 15 < $sum && $sum < 30 ){
            $datas = Datas::find(1);

        } else if ( 30 < $sum && $sum < 35 ) {
            $datas = Datas::find(2);
        } else {
            $datas = Datas::find(3);
        }
        return view('static_pages.search', compact('datas','num','sum'));
    }
}
