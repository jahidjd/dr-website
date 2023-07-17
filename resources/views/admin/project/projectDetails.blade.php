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
                            <h1 class="m-0">Projects</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Projects</li>
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
                                    <h2 class="card-title">Update Projects Details</h2>
                                </div>
                                @if ($message = Session::get('success'))
                                <span style="color: green">{{$message}}</span>
                                @endif
                                <form action="{{route('updateProjectDetails')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="project_id"
                                        value="@if($details!='')  {{$details->project_id}} @else {{$pro->id}}  @endif">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" class="form-control"
                                                value="@if($details!='')  {{$details->title}} @else {{old('title')}}  @endif"
                                                id="exampleInputEmail1" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="details">Details</label>
                                            <textarea name="details" id="" cols="15" rows="5"
                                                class="form-control">@if($details!='')  {{$details->details}} @else {{old('details')}}  @endif</textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="details">Video Link</label>
                                            <input type="text" name="video_link" class="form-control"
                                                value="@if($details!='')  {{$details->video_link}} @else {{old('video_link')}}  @endif">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" id="exampleInputFile"
                                                        name="image">
                                                    @if ($details!='')
                                                    <img src="{{url('admin/img/project/',$details->image)}}" alt=""
                                                        height="200px">
                                                    @endif

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
                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="card-title">Add Psacific Details List</h2>
                                </div>
                                <form action="{{route('listAdd')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="project_id" value="{{$pro->id}}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" class="form-control" value="{{old('title')}}"
                                                id="exampleInputEmail1" name="title">
                                        </div>
                                        <input type="submit" class="btn btn-info">
                                    </div>
                                  
                                </form>

                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Project</th>
                                                <th>Title</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($p as $k=>$v)
                                            <tr>
                                                <td>{{++$k}}</td>
                                                <td>{{$v->project->title}}</td>
                                                <td>{{$v->title}}</td>
                                                
                                                <td>
                                                    <a href="{{route('listEdit',$v->id)}}" class="btn"
                                                        style="color: green"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <form action="{{route('deleteList',$v->id)}}" method="post">
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