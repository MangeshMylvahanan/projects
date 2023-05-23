<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\User;

class imgupload extends Controller
{
    public function create(){
        return view('login');
    }
    public function store(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $request->validate(['image' => 'required|image|mimes:png,jpg|max:2048']);
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/users/',$filename);
            $user->image = $filename;
        }
        if($request->hasFile('video'))
        {
            $video = $request->file('video');
            $request->validate(['video'=>'required|mimes:mp4,webm|max:2048']);
            $extension = $video->getClientOriginalExtension();
            $videoname = time().'.'.$extension;
            $video->move('uploads/videos/',$videoname);
            $user->video = $videoname;
        }
        $user->save();
        return back()
        ->withSuccess('You have successfully uploaded user details!');
    }
}
