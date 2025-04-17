<?php

namespace App\Http\Controllers;
use App\models\User;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Crypt;

class RestoController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function list(){
        $data= Restaurant::all();
        return view('list',['data'=>$data]);

    }
    function add(Request $req){
       // return $req->input();

    $res= new Restaurant();
    $res->name= $req->name;
    $res->email= $req->email;
    $res->address= $req->address;
     $res->save();
        $req->Session()->flash('status','Restaurant submitted successfully');
        return redirect('list');
    
    }
    function delete($id){
        Restaurant::find($id)->delete();
        Session::flash('status','Restaurant deleted successfully');
        return redirect('list');
    }
    public function edit($id)
{
    $data = Restaurant::find($id);
    return view('edit', ['data' => $data]);
}

public function update(Request $req)
{
    $res = Restaurant::find($req->id);
    $res->name = $req->name;
    $res->email = $req->email;
    $res->address = $req->address;
    $res->save();

    $req->session()->flash('status', 'Restaurant updated successfully');
    return redirect('list');
}

function register(Request $req){
    //echo crypt::encrypt('123@abc');
    $user= new User();
    $user->name = $req->name;
    $user->email =$req->email;
    $user->password= crypt::encrypt($req->password);
    $user->phone =$req->phone;

    $user->save();
    $req->session()->put('user', $req->name);
    return redirect('/');
      //return  $req->input();

}
function login(Request $request){
$user = User::where("email",$request->email)->get();
if (Hash::check($request->password, $user[0]->password)) { 
    $request->session()->put('user', $request->name);
    return redirect('/');
}

}


}