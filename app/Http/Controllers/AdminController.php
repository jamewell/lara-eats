<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view('admin.user', compact('data'));
    }

    public function foodmenu(){
        $data = Foods::all()->sortBy("type");
        return view('admin.foodmenu', compact('data'));
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

    public function updateMenuitem($id){
        $data = foods::find($id);
        return view('admin.editfood', compact("data"));
    }

    public function updatefood(Request $request, $id){
        $data = foods::find($id);
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

    public function reservation(Request $request){
        $data = new Reservation();
        
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->number_of_guests = $request->number_of_guests;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->save();

        return redirect()->back();
    }

    public function deleteUser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteMenuitem($id){
        $data = foods::find($id);
        $data->delete();
        return redirect()->back();
    }
}
