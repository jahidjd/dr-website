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
                            <h1 class="m-0">TTop Section Two</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Top Section Two</li>
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
                                    <h2 class="card-title">Top Section Two Update</h2>
                                  </div>
                                
                                <form action="{{route('updateTopTwo',$top->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   @method('put')
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" value="{{$top->title}}" id="exampleInputEmail1" name="title">
                                      </div>
                                      <div class="form-group">
                                        <label for="details">Details</label>
                                        <textarea name="details" id="" cols="15" rows="5" class="form-control">{{$top->details}}</textarea>
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="description">Video Link</label>
                                        <input type="text" class="form-control" value="{{$top->video_link}}" id="exampleInputEmail1" name="video_link">
                                      </div>
                                      {{-- <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="form-control" id="exampleInputFile" value="" name="image">
                                            <img src="{{url('admin/img/slider/',)}}" alt="" height="200px">
                                          </div>
                                        </div>
                                      </div> --}}
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