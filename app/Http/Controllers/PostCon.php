<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class PostCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( Session::get('user')){
            $user = Session::get("user");
            $email = (string)$user['email'];
            if(DB::table('users')->where('email',$email)->first()){
                $users = DB::table('users')->where('email',$email)->first();
                return view('profile.profile-view',['users'=>$users]);
                // echo json_encode($users);
            }
            // else{
            //     $users = DB::table('users')->insert([
            //         ['email' => $email]
            //     ]); 
            // };
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if( Session::get("user")){
            $user = Session::get("user");
            $email = $user['email'];
            $users = DB::table('users')->where('email',$email)->first();
            return view('profile.profile-edit',compact('users'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Session::get("user");
        $email = $user['email'];
        $users = DB::table('users')->where('email',$email)->first();
        $task = $request->input('obj1') + $request->input('obj2') + $request->input('obj3') 
                + $request->input('obj4') + $request->input('obj5') + $request->input('obj6') 
                + $request->input('obj7') + $request->input('obj8') + $request->input('obj9') 
                + $request->input('obj10') + $request->input('obj11') + $request->input('obj12');
        $score= $task*20;
        $uuid = $users->user_id;
        DB::table('users')
                        ->where('email',$email)
                        ->update([
                            'user_id' => $uuid,
                            'full_name' =>  $request->input('fullname'),
                            'age' => $request->input('age'),
                            'gender' => $request->input('gender'),
                            'address' => $request->input('address'),
                            'username' => $request->input('username'),
                            'obj1' => $request->input('obj1'),
                            'obj2' => $request->input('obj2'),
                            'obj3' => $request->input('obj3'),
                            'obj4' => $request->input('obj4'),
                            'obj5' => $request->input('obj5'),
                            'obj6' => $request->input('obj6'),
                            'obj7' => $request->input('obj7'),
                            'obj8' => $request->input('obj8'),
                            'obj9' => $request->input('obj9'),
                            'obj10' => $request->input('obj10'),
                            'obj11' => $request->input('obj11'),
                            'obj12' => $request->input('obj12'),
                            'score' => $score,
                            'task' => $task
                        ]);
        return redirect()->route('profile.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
