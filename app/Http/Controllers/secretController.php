<?php

namespace App\Http\Controllers;


use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\secretDb;
use Illuminate\Support\Facades\DB;

class secretController extends Controller
{

    public function createSecret(Request $request){

        if($request ->ismethod('post')){
            //to check all the datas dumped from the form
            $data = $request -> all();
            $secretDb = new secretDb();
            $secretDb-> secretText = $data['secretText'];
            $secretDb-> hash = sha1(time());
            $secretDb-> createdAt = today();
            $secretDb -> expiresAt = today();
            $secretDb -> remainingViews = 5;
            $secretDb -> save();
            $generatedhash = $secretDb->hash;
            $generatedsecretText = $secretDb -> secretText;
            $code = "Your secret is created, 201 Created";
            $createdsecret = response()->json(['Your generated hash for fetching'=>$generatedhash, "message"=>$code]); // 201 = created
            $currentUrl = url('/');
            return view('show', compact('generatedhash', 'generatedsecretText','createdsecret','currentUrl'));
        }else{
            return response()->json(['405 Invalid input']);
        }
    }

    public function showSecret($hashcode){
            // getting back the values from the database
            $secretDb = DB::table('secret')->select('hash','secretText')->where('hash','=',$hashcode)->get()->value('secretText');
            $remainingViews = DB::table('secret')->select('remainingViews')->where('hash','=',$hashcode)->get()->value('remainingViews');
            // check if the secretDb is empty or not
            if(empty($secretDb)){
                return response()->json(['404 Error not found']);
            } elseif($remainingViews==0){
                return response()->json(['Your secret expired, you can only see the secret 5 time']);
            } else {
            $selectedsecret = response()->json(['Found secret'=>$secretDb]);
            return view('fetchsecret',compact('secretDb','selectedsecret','remainingViews'));}

    }
}
