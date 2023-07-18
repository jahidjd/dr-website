<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\TopSection;
use App\Models\TopSectionTwo;
use Intervention\Image\Facades\Image as ResizeImage;

class AdminController extends Controller
{
    function __construct(){
        $this->middleware('auth')->except('index');
    }
    function adminIndex(){
        return view('admin.admin.index');
    }
    function dashboard(){
        return view('admin.dashboard.index');
    }
    function slider(){
        $slider = Slider::first();
        return view('admin.slider.index',compact('slider'));
    }
    function updateSlider(Request $request, $id){
        $slider = Slider::find($id);
        $data = [
            'big_text'=>$request->big_text,
            'small_text'=>$request->small_text,
        ];
        if($request->file('image')){
            $path = public_path('admin/img/slider/');
        
           $name = 'slider'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            ->resize(1389, 753)
            ->save($path . $name);

        // $image = new Image();
        $data['image'] = $name;
        }
        $r = $slider->update($data);
        if($r){
            return back()->with('success','updated successfully');
        }
    }
    function topSection(){
        $top = TopSection::latest()->get();
        return view('admin.topSection.index',compact('top'));
    }
    function addTop(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        // $path = public_path('admin/img/slider/');
        //  $name = 'slider'.time() . '.' . $request->image->extension();
        // ResizeImage::make($request->file('image'))
        //     ->resize(1389, 753)
        //     ->save($path . $name);
        // $data['image'] = $name;
        $r = TopSection::create($data);
        if($r){
            return back()->with('success','Your Data Has been Added Successfully');
        }

    }
    function editTop($id){
        $top = TopSection::latest()->get();
        $t = TopSection::find($id);
        return view('admin.topSection.edit',compact('top','t'));
    }
    function updateTop(Request $request, $id){
        $t = TopSection::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
         $r = $t->update($data);
         if($r){
            return redirect()->route('topSection')->with('success','Your Data Has been Updated Successfully');
        }
    }
    function deleteTop(Request $request, $id){
        $t = TopSection::find($id);
        $r = $t->delete();
        if($r){
            return redirect()->route('topSection')->with('success','Your Data Has been Deleted Successfully');
        }
    }
    function topTwo(){
        $top = TopSectionTwo::first();
        return view('admin.topTwo.index',compact('top'));
    }
    function updateTopTwo(Request $request, $id){
        $top = TopSectionTwo::find($id);
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'video_link'=>$request->video_link,
        ];
        $r =  $top->update($data);
        if($r){
            return back()->with('success','Your Data Has been Deleted Successfully');
        }
    }
}
