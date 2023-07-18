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
                            <h1 class="m-0">Chamber Add</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Chamber Add</li>
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
                                    <h2 class="card-title">Chamber Form</h2>
                                </div>

                                <form action="{{route('chambers.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @method('put') --}}
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Address</label>
                                                    <textarea name="address" id="" cols="15" rows="3"
                                                        class="form-control"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Mobile</label>
                                                    <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Email</label>
                                                    <input type="email" name="email" class="form-control" value="{{old('email')}}">

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Workday Start</label>
                                                    <select name="workday_from" id="" class="form-control">
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
                                                    <input type="time" name="time_from" class="form-control" value="{{old('time_from')}}">


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Time End</label>
                                                    <input type="time" name="time_end" class="form-control" value="{{old('time_end')}}">


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Another Single Work Day</label>
                                                    <select name="work_day_single" id="" class="form-control">
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
                                                        class="form-control" value="{{old('work_time_single_start')}}">


                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label for="details">Time End</label>
                                                    <input type="time" name="work_time_single_end" class="form-control" value="{{old('work_time_single_end')}}">


                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                
                                                    <label for="details">Off Day</label>
                                                    <select name="off_day" id="" class="form-control">

                                                        <option value="Saturday">Saturday</option>
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                    </select>


                                                </div>
                                            <div class="col-md-3 col-sm-12">
                                                
                                                    <label for="details">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="active">Active</option>
                                                        <option value="deactive">Deactive</option>
                                                    </select>


                                                </div>
                                        </div>



                                    </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            </form>
                    </div>
                    <div class="card ">
                        <div class="card-header">
                            <h2 class="card-title">Chamber List</h2>
                        </div>
                        @if ($message = Session::get('success'))
                        <span style="color: green">{{$message}}</span>
                        @endif

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Address</th>
                                        <th>Day Single</th>
                                        <th>Day Regular</th>
                                        <th>Time Single</th>
                                        <th>Time Regular</th>
                                        <th>Off Day</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($chamber as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$v->address}}</td>
                                        <td>{{$v->work_day_single}}</td>
                                        <td>{{$v->workday_from}} <span style="color: green">To</span> {{$v->workday_end}}</td>
                                        <td>{{$v->work_time_single_start}}  <span style="color: green">To</span> {{$v->work_time_single_end}}</td>
                                        <td>{{$v->time_from}}  <span style="color: green">To</span> {{$v->time_end}}</td>
                                        <td>{{$v->off_day}}</td>
                                        <td>
                                            @if ($v->status=='active')
                                                <button class="btn btn-success">{{$v->status}}</button>
                                            @else 
                                            <button class="btn btn-danger">{{$v->status}}</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('chambers.edit',$v->id)}}" class="btn"
                                                style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{route('chambers.destroy',$v->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('are you sure!')"
                                                    class="btn" style="color: red"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>

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



                    </div>

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