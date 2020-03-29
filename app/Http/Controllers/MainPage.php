<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainPage extends Controller
{
    public function handler(Request $req){
        $q = $req->input('q');
        if( isset($q) && !empty($q) ){
            $response = Http::get('https://trefle.io/api/plants?token=cXJKcEZFM05KVnpmaWllVXAvVjJndz09&common_name='.$q);
        }
        else{
            $response = Http::get('https://trefle.io/api/plants?token=cXJKcEZFM05KVnpmaWllVXAvVjJndz09&page_size=5&page=8');
        }
        $response = $response->json();
        return view('welcome',['q'=>$q,'content'=>$response]);
    }
}
