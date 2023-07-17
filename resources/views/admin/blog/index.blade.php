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
                                    <h2 class="card-title">Add Blog</h2>
                                  </div>
                                
                                <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" class="form-control" value="{{old('title')}}" id="exampleInputEmail1" name="title">
                                        @error('title')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="description">Categories</label>
                                        <select name="categories[]" id="" class="form-control" multiple>
                                            @foreach ($category as $v)
                                            <option value="{{$v->title}}">{{$v->title}}</option>
                                            @endforeach 
                                        </select> 
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Details</label>
                                        <textarea name="details" id="" cols="15" rows="5" class="form-control">{{old('details')}}</textarea>
                                        @error('details')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Short Image</label>
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="image_short">
                                        @error('image_short')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Big Image</label>
                                        <input type="file" class="form-control"  id="exampleInputEmail1" name="image_big">
                                        @error('image_big')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div> 
                                      <div class="form-group">
                                        <label for="description">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select> 
                                      </div>
                                    </div>
                                    <!-- /.card-body -->
                    
                                    <div class="card-footer">
                                      <button type="submit" class="btn btn-primary">Submit</button>
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
                                                <th>Categories</th>
                                                <th>Details</th>
                                                <th>Short Image</th>
                                                <th>Big Image</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           @forelse ($blog as $k=>$v)
                                           <tr>
                                            <td>{{++$k}}</td>
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->categories}}</td>
                                            <td>{{$v->details}}</td>
                                            <td>
                                                <img src="{{url('admin/img/blog',$v->image_short)}}" alt="" style="height: 100px">
                                                
                                            </td>
                                            <td>
                                                <img src="{{url('admin/img/blog',$v->image_big)}}" alt="" style="height: 150px">
                                            </td>
                                            <td>{{$v->date}}, {{$v->month}}</td>
                                            <td>{{$v->status}}</td>
                                            <td>
                                                <a href="{{route('blogs.edit',$v->id)}}"  class="btn" style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{route('blogs.destroy',$v->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                     <button type="submit" onclick="return confirm('are you sure!')" class="btn" style="color: red"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                                <a href="{{route('blogDetails',$v->id)}}" class="btn" style="color: orange"><i class="fa-sharp fa-solid fa-plus"></i></a>

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