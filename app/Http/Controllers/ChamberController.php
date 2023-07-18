<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Chamber;

class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();
        $chamber = Chamber::latest()->get();
        return view('admin.chamber.index',compact('contact','chamber'));
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
        ];
        $r = Chamber::create($data);
        if($r){
            return back()->with('success','chamber added successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chamber = Chamber::latest()->get();    
        $cham = Chamber::find($id);
        return view('admin.chamber.edit',compact('cham','chamber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cham = Chamber::find($id);
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
        ];
        $r = $cham->update($data);
        if($r){
            return redirect()->route('chambers.index')->with('success','chamber updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cham = Chamber::find($id);
        $r = $cham->delete();
        if($r){
            return redirect()->route('chambers.index')->with('success','chamber deleted successfully');
        }
    }
}
