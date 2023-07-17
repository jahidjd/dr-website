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
                                    <h2 class="card-title">Update About Section Two</h2>
                                </div>

                                <form action="{{route('updateAboutSectionTwo',$as->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Section Title</label>
                                                    <input type="text" name="section_title" class="form-control" value="{{$as->section_title}}">


                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"> Section Quatation</label>
                                                    <textarea name="section_q" id="" cols="15" rows="5"
                                                        class="form-control">{{$as->section_q}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Details</label>
                                                    <textarea name="details" id="" cols="15" rows="5"
                                                        class="form-control">{{$as->details}}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Image</label>
                                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                                        name="image">
                                                    <img src="{{url('admin/img/about',$as->image)}}" alt=""
                                                        style="height: 250px">

                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Prograce Title One</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="p_title_one" value="{{$as->p_title_one}}">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Prograce Value One</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        name="p_value_one" value="{{$as->p_value_one}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Prograce Title Two</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="p_title_two" value="{{$as->p_title_two}}">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Prograce Value Two</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        name="p_value_two" value="{{$as->p_value_two}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Prograce Title Three</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="p_title_three" value="{{$as->p_title_three}}">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Prograce Value Three</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        name="p_value_three" value="{{$as->p_value_three}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Prograce Title Four</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    name="p_title_four" value="{{$as->p_title_four}}">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Prograce Value Four</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        name="p_value_four" value="{{$as->p_value_four}}">
                                                </div>
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