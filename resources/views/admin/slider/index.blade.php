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
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    {{-- <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div> --}}
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable">

                            <!-- Map card -->
                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="card-title">Slider Form</h2>
                                  </div>
                                
                                <form action="{{route('updateSlider',$slider->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Big Text</label>
                                        <input type="text" class="form-control" value="{{$slider->big_text}}" id="exampleInputEmail1" name="big_text">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Small Text</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value="{{$slider->small_text}}" name="small_text">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputFile">Slider Image</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="form-control" id="exampleInputFile" value="{{$slider->image}}" name="image">
                                            <img src="{{url('admin/img/slider/',$slider->image)}}" alt="" height="200px">
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
                                    <h2 class="card-title">Slider List</h2>
                                  </div>
                                
                               
                                    <div class="card-body">
                                      <table class="table table-bordered">
                                         <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Big Text</th>
                                                <th>Small Text</th>
                                                <th>Slider Image</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           
                                            <tr>
                                                <td>1</td>
                                                <td>{{$slider->big_text}}</td>
                                                <td>{{$slider->small_text}}</td>
                                                <td><img src="{{url('admin/img/slider/',$slider->image)}}" alt="" height="200px"></td>
                                                <td>
                                                    <a href="" onclick="return confirm('are you sure!')"></a>
                                                </td>
                                            </tr>
                                            
                                            
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