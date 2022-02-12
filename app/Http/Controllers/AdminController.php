<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view('admin.user', compact('data'));
    }

    public function foodmenu(){
        return view('admin.foodmenu');
    }

    public function upload(Request $request){
        $data = new Foods();
        $image = $request->image;

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imageName);
        
        $data->image = $imageName;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->type = $request->type;
        $data->save();

        return redirect()->back();
    }

    public function deleteUser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
}
