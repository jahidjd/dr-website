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
                            <h1 class="m-0">About Us</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
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
                                    <h2 class="card-title">Update About Us</h2>
                                </div>

                                <form action="{{route('updateAbout',$about->id)}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Online Booking</label>
                                            <textarea name="online_booking" id="" cols="15" rows="5" class="form-control">{{$about->online_booking}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Medical Protection</label>
                                            <textarea name="medical_protection" id="" cols="15" rows="5" class="form-control">{{$about->medical_protection}}</textarea>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Own Laboratory</label>
                                            <textarea name="own_laboratory" id="" cols="15" rows="5" class="form-control">{{$about->own_laboratory}}</textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Top Image</label>
                                            <input type="file" class="form-control" id="exampleInputEmail1"
                                                name="top_image">
                                            <img src="{{url('admin/img/about',$about->top_image)}}" alt=""
                                                style="height: 250px">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Link</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="video_link" value="{{$about->video_link}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Video Image</label>
                                            <input type="file" class="form-control" id="exampleInputEmail1"
                                                name="video_image">
                                            <img src="{{url('admin/img/about',$about->video_image)}}" alt=""
                                                style="height: 250px">

                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
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