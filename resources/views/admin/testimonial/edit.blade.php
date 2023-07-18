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
                            <h1 class="m-0">Testimonial</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Testimonial Update</li>
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
                                    <h2 class="card-title">Update Testimonial</h2>
                                  </div>
                                
                                <form action="{{route('testimonial.update',$tt->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   @method('put')
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" value="{{$tt->name}}" id="exampleInputEmail1" name="name">
                                        @error('name')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="details">Details</label>
                                        <textarea name="details" id="" cols="15" rows="5" class="form-control">{{$tt->details}}</textarea>
                                        @error('details')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="details">Designation</label>
                                        <input type="text" class="form-control" value="{{$tt->post}}" id="exampleInputEmail1" name="post">
                                        @error('post')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="details">Instagram Link</label>
                                        <input type="text" class="form-control" value="{{$tt->insta_link}}" id="exampleInputEmail1" name="insta_link" placeholder="Optional">
                                      </div>
                                      <div class="form-group">
                                        <label for="details">Facebook Link</label>
                                        <input type="text" class="form-control" value="{{$tt->fb_link}}" id="exampleInputEmail1" name="fb_link" placeholder="Optional">
                                      </div>
                                      <div class="form-group">
                                        <label for="details">Twitter Link</label>
                                        <input type="text" class="form-control" value="{{$tt->trt_link}}" id="exampleInputEmail1" name="trt_link" placeholder="Optional">
                                      </div>
                                      <div class="form-group">
                                        <label for="details">LinkedIn Link</label>
                                        <input type="text" class="form-control" value="{{$tt->lnkd_link}}" id="exampleInputEmail1" name="lnkd_link" placeholder="Optional">
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="form-control" id="exampleInputFile" value="" name="image" >
                                            <img src="{{url('admin/img/testimonial',$tt->image)}}" alt="" height="150px">
                                            @error('image')
                                            <span style="color: red">{{$message}}</span>
                                            @enderror
                                          </div>
                                        </div>
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
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </form>
                            </div>
                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="card-title">Testimonial List</h2>
                                  </div>
                                @if ($message = Session::get('success'))
                                    <span style="color: green">{{$message}}</span>
                                @endif
                               
                                    <div class="card-body">
                                      <table class="table table-bordered">
                                         <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Details</th>
                                                <th>Image</th>
                                                <th>FB Link</th>
                                                <th>Insta Link</th>
                                                <th>Twitter Link</th>
                                                <th>LinkedIn Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                           @forelse ($t as $k=>$v)
                                           <tr>
                                            <td>{{++$k}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>{{$v->post}}</td>
                                            <td>{{$v->details}}</td>
                                            <td>
                                                <img src="{{url('admin/img/testimonial',$v->image)}}" alt="" height="150px">
                                                
                                            </td>
                                            <td>{{$v->fb_link}}</td>
                                            <td>{{$v->insta_link}}</td>
                                            <td>{{$v->trt_link}}</td>
                                            <td>{{$v->lnkd_link}}</td>
                                            
                                            <td>{{$v->status}}</td>
                                            <td>
                                                <a href="{{route('testimonial.edit',$v->id)}}"  class="btn" style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{route('testimonial.destroy',$v->id)}}" method="post">
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