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
                                    <h2 class="card-title">Add Blog Details</h2>
                                </div>
                                @if ($message = Session::get('success'))
                                <span style="color: green">{{$message}}</span>
                                @endif
                                <form action="{{route('updateBlogDetails')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="blog_id"
                                        value="@if($details!='')  {{$details->blog_id}} @else {{$blog->id}}  @endif">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Short Details</label>
                                                    <textarea name="short_details" id="" class="form-control" cols="15"
                                                        rows="5">@if(!empty($details))  {{$details->short_details}} @else {{old('short_details')}}  @endif</textarea>


                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Quotation</label>
                                                    <textarea name="quotation" id="" cols="15" rows="5"
                                                        class="form-control">@if(!empty($details))  {{$details->quotation}} @else {{old('quotation')}}  @endif</textarea>
                                                    @error('quotation')
                                                    <span style="color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Quoted By</label>
                                                    <input type="text" name="quoted_by" class="form-control"
                                                        value="@if(!empty($details))  {{$details->quoted_by}} @else {{old('quoted_by')}}  @endif">

                                                    @error('quoted_by')
                                                    <span style="color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Designation</label>
                                                    <input type="text" name="post" class="form-control"
                                                        value="@if(!empty($details))  {{$details->post}} @else {{old('post')}}  @endif">

                                                    @error('post')
                                                    <span style="color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Image One</label>
                                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                                        name="image_one">
                                                    @if(!empty($details))
                                                    <img src="{{url('admin/img/blog',$details->image_one)}}" alt=""
                                                        style="height: 100px">
                                                    @endif

                                                    @error('image_one')
                                                    <span style="color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Image Two</label>
                                                    <input type="file" class="form-control" id="exampleInputEmail1"
                                                        name="image_two">
                                                    @if(!empty($details))
                                                    <img src="{{url('admin/img/blog',$details->image_two)}}" alt=""
                                                        style="height: 100px">
                                                    @endif
                                                    @error('image_two')
                                                    <span style="color: red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">More Details</label>
                                                    <textarea name="more_details" id="" class="form-control" cols="15"
                                                        rows="5">@if(!empty($details))  {{$details->more_details}} @else {{old('more_details')}}  @endif</textarea>


                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                @if(!empty($details))
                                                <?php $d = json_decode($details->tags); ?>
                                                @foreach ($d as $k=>$v)
                                                <div class="col-md-2 col-sm-4 col-xs-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tags</label>
                                                        <input type="text" name="tags[]" class="form-control"
                                                            value="{{$v}}">


                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-md-2 col-xs-2 col-sm-2">
                                                    <button class="btn btn-info addMore">+</button>
                                                </div>

                                                @else
                                                <div class="col-md-2 col-sm-4 col-xs-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Tags</label>
                                                        <div class="row">
                                                            <div class="col-md-10 col-xs-10 col-sm-10">
                                                                <input type="text" name="tags[]" class="form-control"
                                                                    value="">
                                                            </div>
                                                            <div class="col-md-2 col-xs-2 col-sm-2">
                                                                <button class="btn btn-info addMore">+</button>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-2 col-sm-4 col-xs-4 more">
                                                </div> --}}

                                                @endif
                                                <div class="col-md-2 col-sm-4 col-xs-4 more">
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
                                    <h2 class="card-title">Q&A Form</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('addQa')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" name="title" class="form-control">


                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Details</label>
                                                    <textarea name="details" id="" class="form-control" cols="15"
                                                        rows="5"></textarea>


                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-info">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-header">
                                    <h2 class="card-title">Q&A List</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Blog Name</th>
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($qa as $k=>$v)
                                            <tr>
                                                <td>{{++$k}}</td>
                                                <td>{{$v->blog->title}}</td>
                                                <td>{{$v->title}}</td>
                                                <td>{{$v->details}}</td>
                                                <td>
                                                    <a href="{{route('qnaEdit',$v->id)}}"  class="btn" style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{route('qnaDelete',$v->id)}}" method="post">
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
                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="card-title">Details Section Form</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('addSection')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="text" name="title" class="form-control">


                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Details</label>
                                                    <textarea name="details" id="" class="form-control" cols="15"
                                                        rows="5"></textarea>


                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-info">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-header">
                                    <h2 class="card-title">Details Section List</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Blog Name</th>
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($section as $k=>$v)
                                            <tr>
                                                <td>{{++$k}}</td>
                                                <td>{{$v->blog->title}}</td>
                                                <td>{{$v->title}}</td>
                                                <td>{{$v->details}}</td>
                                                <td>
                                                    <a href="{{route('sectionEdit',$v->id)}}"  class="btn" style="color: green"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <form action="{{route('sectionDelete',$v->id)}}" method="post">
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
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            var count = 1;
            $('.addMore').on('click',function(e){
                count++
                e.preventDefault();
                let tr = '<div class="form-group count_'+count+'">'
                    tr+= '<label for="exampleInputEmail1">Tags</label>'
                    tr+= '<div class="row">'
                    tr+= ' <div class="col-md-10 col-xs-10 col-sm-10">'
                    tr+='<input type="text" name="tags[]" class="form-control" value=""></div>'
                    tr+='<div class="col-md-2 col-xs-2 col-sm-2">'
                    tr+='<button class="btn btn-danger remove " value="'+count+'">Delete</button></div></div></div>'
                    $('.more').append(tr)
            })
            $(document).on('click','.remove',function(e){ 
                        e.preventDefault()      
                        let test = $(this).attr('value')
                        $('.count_'+ test).remove()
             
                });
        })
    </script>
    @endsection