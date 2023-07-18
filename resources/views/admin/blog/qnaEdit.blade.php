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
                            <h1 class="m-0">Blog</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blog</li>
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
                                    <h2 class="card-title">Q&A Update</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('updateQa',$q->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <input type="hidden" name="blog_id" value="{{$q->blog_id}}">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" name="title" class="form-control" value="{{$q->title}}">


                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Details</label>
                                                    <textarea name="details" id="" class="form-control" cols="15"
                                                        rows="5">{{$q->details}}</textarea>


                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-info" value="Update">
                                        </div>
                                    </form>
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