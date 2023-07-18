<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogShort;
use App\Models\BlogDetails;
use App\Models\QandA;
use App\Models\DetailsSection;
use Carbon\Carbon;
use Intervention\Image\Facades\Image as ResizeImage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = BlogShort::latest()->get();
        $category = BlogCategory::get();
        return view('admin.blog.index',compact('blog','category'));
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
            'categories'=>'required',
            'details'=>'required',
            'image_short'=>'required',
            'image_big'=>'required',
        ]);
        $currentMonth = Carbon::now()->format('M');
        $currentDate = Carbon::now()->format('d');
        $data = [
            'title'=>$request->title,
            'categories'=>json_encode($request->categories),
            'details'=>$request->details,
            'status'=>$request->status,
            'month'=>$currentMonth,
            'date'=>$currentDate,
            
        ];
           $path = public_path('admin/img/blog/');
           $short = $request->file('image_short');
           $nameShort = 'blog-short-'.time() . '.' . $short->getClientOriginalExtension();
            ResizeImage::make($request->file('image_short'))
            ->resize(1070, 713)
            ->save($path . $nameShort);

         $data['image_short'] = $nameShort;
           $big = $request->file('image_big');
           $nameBig = 'blog-big-'.time() . '.' . $big->getClientOriginalExtension();
            ResizeImage::make($request->file('image_big'))
            ->resize(530, 370)
            ->save($path . $nameBig);

        $data['image_big'] = $nameBig;
        $r = BlogShort::create($data);
        if($r){
            return back()->with('success','your blog has been added successfully');
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
        $blog = BlogShort::latest()->get();
        $b = BlogShort::find($id);
        $category = BlogCategory::get();
        return view('admin.blog.edit',compact('blog','category','b'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $b = BlogShort::find($id);
        $currentMonth = Carbon::now()->format('M');
        $currentDate = Carbon::now()->format('d');
        $data = [
            'title'=>$request->title,
            'categories'=>json_encode($request->categories),
            'details'=>$request->details,
            'status'=>$request->status,
            'month'=>$currentMonth,
            'date'=>$currentDate,
            
        ];
        $path = public_path('admin/img/blog/');
        if($request->file('image_short')){
            $short = $request->file('image_short');
           $nameShort = 'blog-short-'.time() . '.' . $short->getClientOriginalExtension();
            ResizeImage::make($request->file('image_short'))
            ->resize(1070, 713)
            ->save($path . $nameShort);

         $data['image_short'] = $nameShort;
        }
        if($request->file('image_big')){
            $big = $request->file('image_big');
           $nameBig = 'blog-big-'.time() . '.' . $big->getClientOriginalExtension();
            ResizeImage::make($request->file('image_big'))
            ->resize(530, 370)
            ->save($path . $nameBig);

          $data['image_big'] = $nameBig;
        }
       $r = $b->update($data);
        if($r){
            return redirect()->route('blogs.index')->with('your blog has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $b = BlogShort::find($id);
        $r = $b->delete();
        if($r){
            return redirect()->route('blogs.index')->with('your blog has been deleted successfully');
        }
    }
    public function blogCategory(){
        $category = BlogCategory::latest()->get();
        return view('admin.blog.category',compact('category'));
    }
    public function addCategory(Request $request){
        $request->validate([
            'title'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'status'=>$request->status,
        ];
        $r = BlogCategory::create($data);
        if($r){
            return back()->with('success','your category has been added successfully');
        }
    }
    public function editCategory($id){
        $category = BlogCategory::latest()->get();
        $c = BlogCategory::find($id);
        return view('admin.blog.categoryEdit',compact('category','c'));
    }
    public function updateCategory(Request $request, $id){
        $c = BlogCategory::find($id);
        $data = [
            'title'=>$request->title,
            'status'=>$request->status,
        ];
        $r = $c->update($data);
        if($r){
            return redirect()->route('blogCategory')->with('success','your category has been updated successfully');
        }
    }
    public function deleteCategory($id){
        $c = BlogCategory::find($id);
        $r = $c->delete();
        if($r){
            return redirect()->route('blogCategory')->with('success','your category has been deleted successfully');
        }
    }
   public  function blogDetails($id){
        $blog = BlogShort::find($id);
        $details = BlogDetails::where('blog_id',$blog->id)->first();
        $qa = QandA::where('blog_id',$blog->id)->latest()->get();
        $section = DetailsSection::where('blog_id',$blog->id)->get();
        return view('admin.blog.details',compact('blog','details','qa','section')); 
    }
    public function updateBlogDetails(Request $request){
        $details = BlogDetails::where('blog_id',$request->blog_id)->first();
        $data  = [
            'short_details'=>$request->short_details,
            'blog_id'=>$request->blog_id,
            'quotation'=>$request->quotation,
            'quoted_by'=>$request->quoted_by,
            'post'=>$request->post,
            'more_details'=>$request->more_details,
            'tags'=>json_encode($request->tags),
        ];
        $path = public_path('admin/img/blog/');
        if($request->file('image_one')){
            $short = $request->file('image_one');
           $nameShort = 'image-one-'.time() . '.' . $short->getClientOriginalExtension();
            ResizeImage::make($request->file('image_one'))
            ->resize(467, 311)
            ->save($path . $nameShort);

         $data['image_one'] = $nameShort;
        }
        if($request->file('image_two')){
            $image_two = $request->file('image_two');
           $image_twoName = 'image-two-'.time() . '.' . $image_two->getClientOriginalExtension();
            ResizeImage::make($request->file('image_two'))
            ->resize(467, 311)
            ->save($path . $image_twoName);

         $data['image_two'] = $image_twoName;
        }
        if(!empty($details)){
            $r = $details->update($data);
        }else{
            $r = BlogDetails::create($data);
        }
        if($r){
            return back()->with('success','blog details updated successfully');
        }
    }
    public function addQa(Request $request){
        $request->validate([
            'title'=>'required',
            'details'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'blog_id'=>$request->blog_id,
            'details'=>$request->details,
        ];
        $r = QandA::create($data);
        if($r){
            return back()->with('success','Q&A addedd successfully');
        }
    }
    public function qnaDelete($id){
        $r = QandA::find($id);
        $t = $r->delete();
        if($t){
            return back()->with('success','Q&A deleted successfully');
        }

    }
    public function qnaEdit($id){
        $q = QandA::find($id);
        return view('admin.blog.qnaEdit',compact('q'));
    }
    public function updateQa(Request $request, $id){
        $q = QandA::find($id);
        $data = [
            'title'=>$request->title,
            'blog_id'=>$request->blog_id,
            'details'=>$request->details,
        ];
        $r = $q->update($data);
        if($r){
            return redirect()->route('blogDetails',$q->blog_id)->with('success','Q&A updated successfully');
        }
    }
   public function addSection(Request $request){
        $request->validate([
            'title'=>'required',
            'details'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'blog_id'=>$request->blog_id,
            'details'=>$request->details,
        ];
        $r = DetailsSection::create($data);
        if($r){
            return back()->with('success','Section addedd successfully');
        }
    }
    public function sectionEdit($id){
        $s = DetailsSection::find($id);
        return view('admin.blog.sectionEdit',compact('s'));
    }
    public function updateSection(Request $request, $id){
        $q = DetailsSection::find($id);
        $data = [
            'title'=>$request->title,
            'blog_id'=>$request->blog_id,
            'details'=>$request->details,
        ];
        $r = $q->update($data);
        if($r){
            return redirect()->route('blogDetails',$q->blog_id)->with('success','Section updated successfully');
        }
    }
     public function sectionDelete($id){
        $r = DetailsSection::find($id);
        $t = $r->delete();
        if($t){
            return back()->with('success','Section deleted successfully');
        }
    }
}
