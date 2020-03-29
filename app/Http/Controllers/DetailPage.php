<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailPage extends Controller
{
    public function handler($id){
        $response = Http::get('https://trefle.io/api/plants/'.$id.'?token=cXJKcEZFM05KVnpmaWllVXAvVjJndz09');
        $response = $response->json();
        return view('detail',[
            'id'=>$id,
            'content'=>$response
        ]);
    }
}
