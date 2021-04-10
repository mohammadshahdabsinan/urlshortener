<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shorturlcontroller extends Controller
{
    public function short(Request $request){
       if($request->original_url)
       {
           $new_url = shorturl::create([
               'original_url' => $request->original_url
           ]);
       }
    }
    //
}
