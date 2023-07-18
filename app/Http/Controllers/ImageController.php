<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;
use Intervention\Image\Facades\Image as ResizeImage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Image::latest()->get();
        return view('admin.image.index',compact('image'));
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
            'title'=>'required',
            'image'=>'required',
        ]);

        $data = [
            'title'=>$request->title,
            'status'=>$request->status,
        ];


        if($request->file('image')){
            $path = public_path('admin/img/image/');
        
           $name = 'image'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            // ->resize(304, 203)
            ->save($path . $name);

        // $image = new Image();
        $data['image'] = $name;
        }
        $r = Image::create($data);
        if($r){
            return back()->with('success','image uploaded successfully');
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
        $i = Image::find($id);
        $image = Image::latest()->get();
        return view('admin.image.edit',compact('image','i'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $i = Image::find($id);
        $data = [
            'title'=>$request->title,
            'status'=>$request->status,
        ];


        if($request->file('image')){
            $path = public_path('admin/img/image/');
        
           $name = 'image'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            // ->resize(304, 203)
            ->save($path . $name);

        // $image = new Image();
        $data['image'] = $name;
        }
        $r = $i->update($data);
        if($r){
            return redirect()->route('images.index')->with('success','image updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $i = Image::find($id);
        $r = $i->delete();
        if($r){
            return redirect()->route('images.index')->with('success','image deleted successfully');
        }
    }
}
