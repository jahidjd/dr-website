@extends('admin.layout.layout')
@section('body')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        @include('admin.header.menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Contact</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable">

                            <!-- Map card -->
                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="card-title">Contact Form</h2>
                                </div>

                                <form action="{{route('updateContact',$contact->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Address</label>
                                                    <textarea name="address" id="" cols="15" rows="3"
                                                        class="form-control">{{$contact->address}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Mobile</label>
                                                    <input type="text" name="mobile" class="form-control" value="{{$contact->mobile}}">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Email</label>
                                                    <input type="email" name="email" class="form-control" value="{{$contact->email}}">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Workday Start</label>
                                                    <select name="workday_from" id="" class="form-control">
                                                        <option value="{{$contact->workday_from}}">{{$contact->workday_from}}</option>
                                                        <option value="Sat">Saturday</option>
                                                        <option value="Sun">Sunday</option>
                                                        <option value="Mon">Monday</option>
                                                        <option value="Tue">Tuesday</option>
                                                        <option value="Wed">Wednesday</option>
                                                        <option value="Thurs">Thursday</option>
                                                        <option value="Fri">Friday</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Workday End</label>
                                                    <select name="workday_end" id="" class="form-control">
                                                        <option value="{{$contact->workday_end}}">{{$contact->workday_end}}</option>
                                                        <option value="Sat">Saturday</option>
                                                        <option value="Sun">Sunday</option>
                                                        <option value="Mon">Monday</option>
                                                        <option value="Tue">Tuesday</option>
                                                        <option value="Wed">Wednesday</option>
                                                        <option value="Thurs">Thursday</option>
                                                        <option value="Fri">Friday</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Time Start</label>
                                                    <input type="time" name="time_from" class="form-control" {{$contact->time_from}}>


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Time End</label>
                                                    <input type="time" name="time_end" class="form-control" value="{{$contact->time_end}}">


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Another Single Work Day</label>
                                                    <select name="work_day_single" id="" class="form-control">
                                                        <option value="{{$contact->work_day_single}}">{{$contact->work_day_single}}</option>
                                                        <option value="Saturday">Saturday</option>
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Time End</label>
                                                    <input type="time" name="work_time_single_start"
                                                        class="form-control" value="{{$contact->work_time_single_start}}">


                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Time End</label>
                                                    <input type="time" name="work_time_single_end" class="form-control" value="{{$contact->work_time_single_end}}">


                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                
                                                    <label for="details">Off Day</label>
                                                    <select name="off_day" id="" class="form-control">
                                                        <option value="{{$contact->off_day}}">{{$contact->off_day}}</option>
                                                        <option value="Saturday">Saturday</option>
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                    </select>


                                                </div>
                                            <div class="col-md-9 col-sm-12">
                                                
                                                    <label for="details">Map</label>
                                                    <input type="text" name="map" class="form-control" value="{{$contact->map}}"> 
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                
                                                    <label for="details">Logo</label>
                                                    <input type="file" name="logo" class="form-control"> 
                                                    <img src="{{url('admin/img/logo',$contact->logo)}}" alt="">
                                            </div>
                                        </div>



                                    </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            </form>
                    </div>
                    {{-- <div class="card ">
                        <div class="card-header">
                            <h2 class="card-title">Project List</h2>
                        </div>
                        @if ($message = Session::get('success'))
                        <span style="color: green">{{$message}}</span>
                        @endif

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($project as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$v->title}}</td>
                                        <td>{{$v->details}}</td>
                                        <td>
                                            <img src="{{url('admin/img/project',$v->image)}}" alt="" height="150px">

                                        </td>
                                        <td>{{$v->status}}</td>
                                        <td>
                                            <a href="{{route('project.edit',$v->id)}}" class="btn"
                                                style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{route('project.destroy',$v->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('are you sure!')"
                                                    class="btn" style="color: red"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                            <a href="{{route('projectDetails',$v->id)}}" class="btn"
                                                style="color: orange"><i class="fa-sharp fa-solid fa-plus"></i></a>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No data added yet</td>
                                    </tr>
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->



                    </div> --}}

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    @include('admin.footer.footer')
    </div>
    @endsection