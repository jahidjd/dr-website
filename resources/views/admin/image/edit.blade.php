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
                            <h1 class="m-0">Image</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Image</li>
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
                                    <h2 class="card-title">Update Image</h2>
                                  </div>
                                
                                <form action="{{route('images.update',$i->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                   
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" value="{{$i->title}}" id="exampleInputEmail1" name="title">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="form-control" id="exampleInputFile" value="" name="image">
                                            <img src="{{url('admin/img/image',$i->image)}}" alt="" style="height: 150px">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="description">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="{{$i->status}}">{{$i->status}}</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select> 
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
                                    <h2 class="card-title">Image List</h2>
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
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           @forelse ($image as $k=>$v)
                                            <tr>
                                                <td>{{++$k}}</td>
                                                <td>{{$v->title}}</td>
                                                <td><img src="{{url('admin/img/image',$v->image)}}" alt="" style="height: 150px"></td>
                                                <td> {{$v->status}} </td>
                                                <td> 
                                                    <a href="{{route('images.edit',$v->id)}}"  class="btn" style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{route('images.destroy',$v->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                     <button type="submit" onclick="return confirm('are you sure!')" class="btn" style="color: red"><i class="fa-solid fa-trash"></i></button>
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