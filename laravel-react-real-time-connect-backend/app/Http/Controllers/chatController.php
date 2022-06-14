<?php

namespace App\Http\Controllers;

use App\Events\FormSubmit;
use Illuminate\Http\Request;

class chatController extends Controller
{
    //
    public function chat(Request $request){
        // $massage = $request->;
        event(new FormSubmit($request->massage));
    }

}
