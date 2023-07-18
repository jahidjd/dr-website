<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Intervention\Image\Facades\Image as ResizeImage;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team =  Team::latest()->get();
        return view('admin.team.index',compact('team'));
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
            'degree'=>'required',
        ]);
        $data = [
            'name'=>$request->name,
            'post'=>$request->post,
            'details'=>$request->details,
            'status'=>$request->status,
            'insta'=>$request->insta,
            'fb'=>$request->fb,
            'skypee'=>$request->skypee,
            'twitter'=>$request->twitter,
            'degree'=>$request->degree,
        ];
        $path = public_path('admin/img/team/');
           $name = 'team-'.time() . '.' . $request->image->extension();
          ResizeImage::make($request->file('image'))
            ->resize(350, 350)
            ->save($path . $name);

        // $image = new Image();
        $data['image'] = $name;
        $r  = Team::create($data);
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
        $team =  Team::latest()->get();
        $t =  Team::find($id);
        return view('admin.team.edit',compact('team','t'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $t =  Team::find($id);
        $data = [
            'name'=>$request->name,
            'post'=>$request->post,
            'details'=>$request->details,
            'status'=>$request->status,
            'insta'=>$request->insta,
            'fb'=>$request->fb,
            'skypee'=>$request->skypee,
            'twitter'=>$request->twitter,
            'degree'=>$request->degree,
        ];
        if($request->file('image')){
            $path = public_path('admin/img/team/');
           $name = 'team-'.time() . '.' . $request->image->extension();
            ResizeImage::make($request->file('image'))
            ->resize(350, 350)
            ->save($path . $name);
          $data['image'] = $name;
        }
        $r = $t->update($data);
        if($r){
            return redirect()->route('team.index')->with('success','Yor Data has been Update successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $t =  Team::find($id);
        $r = $t->delete();
        if($r){
            return redirect()->route('team.index')->with('success','Yor Data has been deleted successfully');
        }
    }
}
