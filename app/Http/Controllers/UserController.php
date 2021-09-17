<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user1;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function store(Request $req)
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email'=>'required|email',
            'phone' => 'required|min:10|numeric',
            'city' => 'required',
            'gender' => 'required',
            'pro_img' => 'required',
            'status' => 'required',
            'age'=>'required'
        ]);
        user1::create($data);
        // $data = new user1;
        // $data->firstname=$req->firstname;
        // $data->lastname=$req->lastname;
        // $data->email=$req->email;
        // $data->phone=$req->phone;
        // $data->city=$req->city;
        // $data->gender=$req->gender;
        // $data->pro_img=$req->pro_img;
        // $data->status=$req->status;
        // $data->save();
        
        return redirect('user')->withsuccess('User Added successfully with validation');
    }

    function delete($id){
        $data=user1::find($id);
        $data->delete();
        return redirect('list');
    }

    function show(){
        $record=user1::all();
        return view('list',['users'=>$record]);
    }

    function edit($id){
        $data=user1::find($id);
        return view('userupdate',['data'=>$data]);
    }

    function updateStore(Request $req){
        $data=user1::find($req->id);
        // $data = request()->validate([
        //     'firstname'=>'required',
        //     'lastname'=>'required',
        //     'email'=>'required|email',
        //     'phone' => 'required|min:10|numeric',
        //     'city' => 'required',
        //     'gender' => 'required',
        //     'pro_img' => 'required',
        //     'status' => 'required' 
        // ]);
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->city=$req->city;
        $data->gender=$req->gender;
        $data->age=$req->age;
        $data->pro_img=$req->pro_img;
        $data->status=$req->status;
        $data->save();
        return redirect('list'); 
    }
}
