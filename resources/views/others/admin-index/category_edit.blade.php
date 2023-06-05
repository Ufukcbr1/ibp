@extends('/others/admin-index.admin')




@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Edit</h3>
                    <div class="card-tools">


                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">



                    <form role="form"   action="{{route('admin_category_update',['id'=>$data->id])}}"    method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent</label>


                                <select class="form-control select2" name="parent_id" style="width:100%;">

                                    <option value="{{$data->parent_id}}" selected="selected">...</option>
                                    @foreach($datalist as $rs)

                                        <option value="{{$rs->parent_id}}">{{$rs->title}}</option>

                                    @endforeach

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="keyword">Keyword</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" id="keyword" placeholder="">


                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" name="description" value="{{$data->description}}"  class="form-control" id="Description" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" id="slug" placeholder="">
                                </div>

                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Status</label>

                                    <select class="form-control select2bs4" name="status" style="width: 100%;">
                                        <option  selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->


                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->

            <!-- Main Table -->



            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
            -
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
