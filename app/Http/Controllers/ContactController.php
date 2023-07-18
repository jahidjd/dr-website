<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Intervention\Image\Facades\Image as ResizeImage;

class ContactController extends Controller
{
    function contactPage(){
        $contact = Contact::first();
        return view('admin.contact.index',compact('contact'));
    }
    function updateContact(Request $request, $id){
        $contact = Contact::find($id);
        $data = [
            'address'=>$request->address,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'workday_from'=>$request->workday_from,
            'workday_end'=>$request->workday_end,
            'time_from'=>$request->time_from,
            'time_end'=>$request->time_end,
            'work_day_single'=>$request->work_day_single,
            'work_time_single_start'=>$request->work_time_single_start,
            'work_time_single_end'=>$request->work_time_single_end,
            'off_day'=>$request->off_day,
            'map'=>$request->map,
        ];
        if($request->file('logo')){
            $path = public_path('admin/img/logo/');
        
           $name = 'logo'.time() . '.' . $request->logo->extension();
          ResizeImage::make($request->file('logo'))
            ->resize(284, 89)
            ->save($path . $name);

        // $image = new Image();
        $data['logo'] = $name;
        }
        $r = $contact->update($data);
        if($r){
            return back()->with('success','updated successfully');
        }
    }
}
