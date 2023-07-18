<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectDetails;
use App\Models\ProjectDetailSpacificList;
use Intervention\Image\Facades\Image as ResizeImage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::latest()->get();
        return view('admin.project.index',compact('project'));
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
            'image'=>'required',
            'status'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
        ];
        $path = public_path('admin/img/project/');
        
        $name = 'projects-'.time() . '.' . $request->image->extension();
       ResizeImage::make($request->file('image'))
         ->resize(800, 800)
         ->save($path . $name);

     // $image = new Image();
     $data['image'] = $name;
     $r = Project::create($data);
     if($r){
        return back()->with('success','Your Project Has Been Uploaded Successfully');
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
        $project = Project::latest()->get();
        $pro = Project::find($id);
        return view('admin.project.edit',compact('project','pro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pro = Project::find($id);
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $path = public_path('admin/img/project/');
        
        $name = 'projects-'.time() . '.' . $request->image->extension();
        ResizeImage::make($request->file('image'))
         ->resize(800, 800)
         ->save($path . $name);
        $data['image'] = $name;
        }
        $r = $pro->update($data);
        if($r){
            return redirect()->route('project.index')->with('success','Your Project Has Been Updated Successfully');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pro = Project::find($id);
        $r = $pro->delete();
        if($r){
            return redirect()->route('project.index')->with('success','Your Project Has Been Deleted Successfully');
         }

    }
    function projectDetails($id){
        $pro = Project::find($id);
        $details = ProjectDetails::where('project_id',$id)->first();
        $p = ProjectDetailSpacificList::where('project_id',$id)->latest()->get();
        return view('admin.project.projectDetails',compact('pro','details','p'));
    }
    function updateProjectDetails(Request $request){
        $details = ProjectDetails::where('project_id',$request->project_id)->first();

        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'video_link'=>$request->video_link,
            'project_id'=>$request->project_id,
        ];
        if($request->file('image')){
            $path = public_path('admin/img/project/');
        
        $name = 'projects-details-'.time() . '.' . $request->image->extension();
        ResizeImage::make($request->file('image'))
         ->resize(690, 350)
         ->save($path . $name);
        $data['image'] = $name;
        }
        if(!empty($details)){
            $r = $details->update($data);
        }else{
            $r = ProjectDetails::create($data);
        }
        if($r){
            return back()->with('success','updated successfully');
        }
        
    }
    function listAdd(Request $request){
        $r = ProjectDetailSpacificList::create($request->all());
        if($r){
            return back()->with('success','updated successfully');
        }
        
    }
    function listEdit($id){
        $pp = ProjectDetailSpacificList::find($id);
        $pro = Project::where('id',$pp->project_id)->first();
        $details = ProjectDetails::where('project_id',$pp->project_id)->first();
        $p = ProjectDetailSpacificList::where('project_id',$pp->project_id)->latest()->get();
        return view('admin.project.listEdit',compact('pro','details','p','pp'));
    }
    function updateList(Request $request, $id){
        $pp = ProjectDetailSpacificList::find($id);
        $data = [
            'title'=>$request->title,
            'project_id'=>$request->project_id,
        ] ;
        $r = $pp->update($data);
        if($r){
            return redirect()->route('projectDetails',$pp->project_id)->with('success','updated successfully');
        }
    }
    function deleteList($id){
        $pp = ProjectDetailSpacificList::find($id);
        $r = $pp->delete();
        if($r){
            return redirect()->route('projectDetails',$pp->project_id)->with('success','deleted successfully');
        }
    }
}
