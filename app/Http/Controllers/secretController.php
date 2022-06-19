<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\secretDb;

class secretController extends Controller
{

    public function createSecret(Request $request){
        if($request ->ismethod('post')){
            $data = $request -> all();
            //return $data;

            $secretDb = new secretDb();
            $secretDb-> secretText = $data['secretText'];
            $secretDb-> hash = sha1(time());
            $secretDb-> createdAt = today();
            $secretDb -> expiresAt = today();
            $secretDb -> remainingViews = 5;
            $secretDb -> save();
            $message = "Secret successfully created";
            return response()->json(['message'=>$message, 201]); // 201 = created
        }
    }

}
