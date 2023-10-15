<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Caregiver;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CaregiverController extends Controller
{
    public function index(){

        return view('caregivers.index',['caregivers'=>Caregiver::latest()->paginate(3)]);
    }

    public function create(){
        return view('caregivers.create');
    }
    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:1000'

        ]);

      $imageName=time().'.'.$request->image->extension();
      $request->image->move(public_path('caregivers'),$imageName);

      $caregiver= new Caregiver;
      $caregiver->image=$imageName;
      $caregiver->name=$request->name;
      $caregiver->description =$request->description;

      $caregiver->save();

      return back()->withSuccess(' Successfuly created !!!!');

    }

    public function edit($id){
        $caregiver=Caregiver::where('id',$id)->first();
        return view('caregivers.edit',['caregiver'=>$caregiver]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:1000'
        ]);

        $caregiver=Caregiver::where('id',$id)->first();

        if(isset($request->image)){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('caregivers'),$imageName);
            $caregiver->image=$imageName;
        }


      $caregiver->name=$request->name;
      $caregiver->description =$request->description;

      $caregiver->save();
      return back()->withSuccess(' Caregiver Updated !!!!');

    }
    public function destory($id){
        $caregiver=Caregiver::where ('id',$id)->first();

        $imageName=$caregiver->image;
        $image_path='caregivers/'.$imageName;
        if(file_exists($image_path)){
           unlink($image_path);
        }
        $caregiver->delete();
        return back()->withSuccess(' Caregiver deleted !!!!');
    }

    public function show($id){
        $caregiver=Caregiver::where ('id',$id)->first();

        return view('caregivers.show',['caregiver'=>$caregiver]);
    }


}
