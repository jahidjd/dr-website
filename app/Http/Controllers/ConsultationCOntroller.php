<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineCon;
use App\Models\COnsultationImage;
use App\Models\ConsultationPopup;
use Intervention\Image\Facades\Image as ResizeImage;

class ConsultationCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $con = OnlineCon::latest()->get();
        return view('admin.consultation.index',compact('con'));
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
            'details'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
        ];
        $r = OnlineCon::create($data);
        if($r){
            return back()->with('success','Your data has been added successfully');
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
        $con = OnlineCon::latest()->get();
        $c = OnlineCon::find($id);
        return view('admin.consultation.edit',compact('con','c'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $c = OnlineCon::find($id);
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
        ];
        $r = $c->update($data);
        if($r){
            return redirect()->route('consaltation.index')->with('success','Your data has been updated successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $c = OnlineCon::find($id);
        $r = $c->delete();
        if($r){
            return redirect()->route('consaltation.index')->with('success','Your data has been deleted successfully');
        }
    }
    public function consultationImage(){
        $image = COnsultationImage::first();
        return view('admin.consultation.image',compact('image'));
    }
    public function consultationImageUpdate(Request $request ,$id){
        $image = COnsultationImage::find($id);
        $data = [];
        if($request->file('image')){
            $path = public_path('admin/img/consult/');
        
           $name = 'image-'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            ->resize(632, 615)
            ->save($path . $name);

        // $image = new Image();
        $data['image'] = $name;
       
        }
       $r =  $image->update($data);
       if($r){
        return back()->with('success','image updated successfully');
       }
       
    }
    public function consultationPopup(){
        $messages = ConsultationPopup::latest()->get();
       
        return view('admin.consultation.message',compact('messages'));
    }
    public function consultationPopupAdd(Request $request){
        $request->validate([
            'message'=>'required',
        ]);
        $r = ConsultationPopup::create($request->all());
        if($r){
            return back()->with('success','your data has been uploaded successfully');
        }
    }
    public function consultationPopupEdit($id){
        $messages = ConsultationPopup::latest()->get();
       $m = ConsultationPopup::find($id);
        return view('admin.consultation.messageEdit',compact('messages','m'));
    }
    public function consultationPopupUpdate(Request $request, $id){
        $m = ConsultationPopup::find($id);
        $data = [
            'message'=>$request->message
        ];
        $r = $m->update($data);
        return redirect()->route('consultationPopup')->with('success','updated successfully');
    }
}
