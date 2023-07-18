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
                            <h1 class="m-0">Blog Category</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Blog Category Update</li>
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
                                    <h2 class="card-title">Update Blog Category</h2>
                                  </div>
                                
                                <form action="{{route('updateCategory',$c->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   @method('put')
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" value="{{$c->title}}" id="exampleInputEmail1" name="title">
                                        @error('title')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="description">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="{{$c->status}}">{{$c->status}}</option>
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
                                    <h2 class="card-title">Category List</h2>
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
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           @forelse ($category as $k=>$v)
                                           <tr>
                                            <td>{{++$k}}</td>
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->status}}</td>
                                            <td>
                                                <a href="{{route('editCategory',$v->id)}}"  class="btn" style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{route('deleteCategory',$v->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                     <button type="submit" onclick="return confirm('are you sure!')" class="btn" style="color: red"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                           @empty
                                               <tr>
                                                <td colspan="11">No data added yet</td>
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