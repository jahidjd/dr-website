<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image as ResizeImage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $t = Testimonial::latest()->get();
        return view('admin.testimonial.index',compact('t'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'post'=>'required',
            'details'=>'required',
            'image'=>'required',
        ]);
        $data = [
            'name'=>$request->name,
            'post'=>$request->post,
            'details'=>$request->details,
            'status'=>$request->status,
            'insta_link'=>$request->insta_link,
            'fb_link'=>$request->fb_link,
            'lnkd_link'=>$request->lnkd_link,
            'trt_link'=>$request->trt_link,
        ];
        $path = public_path('admin/img/testimonial/');
           $name = 'testimonial-'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            ->resize(300, 300)
            ->save($path . $name);

        // $image = new Image();
        $data['image'] = $name;
        $r  = Testimonial::create($data);
        if($r){
            return back()->with('success','Yor Data has been added successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $t = Testimonial::latest()->get();
        $tt = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('t','tt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $te = Testimonial::find($id);
        $data = [
            'name'=>$request->name,
            'post'=>$request->post,
            'details'=>$request->details,
            'status'=>$request->status,
            'insta_link'=>$request->insta_link,
            'fb_link'=>$request->fb_link,
            'lnkd_link'=>$request->lnkd_link,
            'trt_link'=>$request->trt_link,
        ];
        if($request->file('image')){
            $path = public_path('admin/img/testimonial/');
           $name = 'testimonial-'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            ->resize(300, 300)
            ->save($path . $name);
        $data['image'] = $name;
        }
        $r = $te->update($data);
        if($r){
            return redirect()->route('testimonial.index')->with('success','Yor Data has been Updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $te = Testimonial::find($id);
        $r = $te->delete();
        if($r){
            return redirect()->route('testimonial.index')->with('success','Yor Data has been Deleted successfully');
        }
    }
}
