<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\AboutSectionTwo;
use Intervention\Image\Facades\Image as ResizeImage;

class AboutController extends Controller
{
    function aboutUst(){
        $about = AboutUs::first();
        return view('admin.about.aboutUs',compact('about'));
    }
    function updateAbout(Request $request, $id){
        $about = AboutUs::find($id);
        $data = [
            'online_booking'=>$request->online_booking,
            'medical_protection'=>$request->medical_protection,
            'own_laboratory'=>$request->own_laboratory,
            'video_link'=>$request->video_link,
        ];
        $path = public_path('admin/img/about/');
        if($request->file('top_image')){
           $topImage = $request->file('top_image');
           $name = 'top_image'.time() . '.' . $topImage->getClientOriginalExtension();
          ResizeImage::make($request->file('top_image'))
            ->resize(685, 472.73)
            ->save($path . $name);
           $data['top_image'] = $name;
        }
        if($request->file('video_image')){
           $videoImage = $request->file('video_image');
           $names = 'video-image'.time() . '.' . $videoImage->getClientOriginalExtension();
          ResizeImage::make($request->file('video_image'))
            ->resize(951.5, 635.58)
            ->save($path . $names);
           $data['video_image'] = $names;
        }
      $r = $about->update($data);
      if($r){
        return back()->with('success','updated successfully');
      }
    }
    function aboutSectionTwo(){
      $as = AboutSectionTwo::first();
      return view('admin.about.sectionTwo',compact('as'));
    }
    function updateAboutSectionTwo(Request $request,$id){
      
      $as = AboutSectionTwo::find($id);
      $data= [
        'section_title'=>$request->section_title,
        'section_q'=>$request->section_q,
        'details'=>$request->details,
        'p_title_one'=>$request->p_title_one,
        'p_title_two'=>$request->p_title_two,
        'p_title_three'=>$request->p_title_three,
        'p_title_four'=>$request->p_title_four,
        'p_value_four'=>$request->p_value_four,
        'p_value_three'=>$request->p_value_three,
        'p_value_two'=>$request->p_value_two,
        'p_value_one'=>$request->p_value_one,
      ];
      $path = public_path('admin/img/about/');
      if($request->file('image')){
        $image = $request->file('image');
        $names = 'about-section-two'.time() . '.' . $image->getClientOriginalExtension();
       ResizeImage::make($request->file('image'))
         ->resize(685, 430.78)
         ->save($path . $names);
        $data['image'] = $names;
     }
     $r = $as->update($data);
     if($r){
        return back()->with('success','updated successfully');
     }

    }
}
