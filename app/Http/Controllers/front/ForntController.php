<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\TopSection;
use App\Models\TopSectionTwo;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\BlogCategory;
use App\Models\BlogShort;
use App\Models\OnlineCon;
use App\Models\COnsultationImage;
use App\Models\ConsultationPopup;
use App\Models\AboutUs;
use App\Models\AboutSectionTwo;
use App\Models\ProjectDetails;
use App\Models\Contact;
use App\Models\ProjectDetailSpacificList;
use App\Models\BlogDetails;
use App\Models\QandA;
use App\Models\DetailsSection;
use App\Models\Image;

class ForntController extends Controller
{
    function index(){
        $slider = Slider::first();
        $top = TopSection::where('status','active')->latest()->get();
        $project = Project::where('status','active')->latest()->get();
        $t = Testimonial::where('status','active')->latest()->get();
        $team = Team::where('status','active')->latest()->get();
        $blog = BlogShort::where('status','active')->latest()->get();
        $onlineCon = OnlineCon::where('status','active')->latest()->get();
        $conImage = COnsultationImage::first();
        $conPop = ConsultationPopup::latest()->get();
        $topTwo = TopSectionTwo::first();
        $menu = Project::where('status','active')->latest()->get();
        $contact = Contact::first();
        $projects = Project::where('status','active')->latest()->get();
        $img = Image::latest()->get();
        return view('front.home.index',compact('slider','top','topTwo','project','t','team','blog','onlineCon','conImage','conPop','menu','contact','projects','img'));
    }
    function aboutUs(){
        $about = AboutUs::first();
        $as = AboutSectionTwo::first();
        $team = Team::where('status','active')->latest()->get();
         $menu = Project::where('status','active')->latest()->get();
         $contact = Contact::first();
         $projects = Project::where('status','active')->latest()->get();
         $img = Image::latest()->get();
        return view('front.about.about',compact('team','about','as','menu','contact','projects','img'));
    }
    function services(){
        $project = Project::where('status','active')->latest()->get();
        $menu = Project::where('status','active')->latest()->get();
        $contact = Contact::first();
        $projects = Project::where('status','active')->latest()->get();
        $img = Image::latest()->get();
        return view('front.services.services',compact('project','menu','contact','projects','img'));
    }
    function serviceDetails($id){
        $team = Team::where('status','active')->latest()->get();
        $onlineCon = OnlineCon::where('status','active')->latest()->get();
        $conImage = COnsultationImage::first();
        $conPop = ConsultationPopup::latest()->get();
        $project = ProjectDetails::where('project_id',$id)->latest()->first();
        $p = ProjectDetailSpacificList::where('project_id',$id)->latest()->get();
        $menu = Project::where('status','active')->latest()->get();
        $contact = Contact::first();
        $projects = Project::where('status','active')->latest()->get();
        $img = Image::latest()->get();
        return view('front.services.serviceDetails',compact('project','p','onlineCon','conImage','conPop','team','menu','contact','projects','img'));
    }
    function blog(){
        $category = BlogCategory::where('status','active')->latest()->get();
        $blog = BlogShort::where('status','active')->latest()->paginate(3);
        $menu = Project::where('status','active')->latest()->get();
        $contact = Contact::first();
        $projects = Project::where('status','active')->latest()->get();
        return view('front.blog.blog',compact('category','blog','menu','contact','projects'));
    }
    function contact(){
        $menu = Project::where('status','active')->latest()->get();
        $contact = Contact::first();
        $projects = Project::where('status','active')->latest()->get();
        $img = Image::latest()->get();
        return view('front.contact.contact',compact('menu','contact','projects','img'));
    }
    function FrontBlogDetails($id){
        $category = BlogCategory::where('status','active')->latest()->get();
        $blog = BlogShort::where('status','active')->latest()->get();
        $menu = Project::where('status','active')->latest()->get();
        $details = BlogDetails::where('blog_id',$id)->first();
        $qna = QandA::where('blog_id',$details->blog_id)->latest()->get();
        $section = DetailsSection::where('blog_id',$details->blog_id)->latest()->get();
        $contact = Contact::first();
        $projects = Project::where('status','active')->latest()->get();
        $images = Image::latest()->get();
        $img = Image::latest()->get();
        return view('front.blog.blogDetails',compact('category','blog','menu','section','qna','details','contact','projects','images','img'));
    }
}
