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
                    <h3 class="card-title">User Add</h3>
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



                    <form role="form"   action="{{route('user_create')}}"   method="post">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="keyword">Password</label>
                                <input type="text" name="password" class="form-control" id="password" placeholder="">

                            </div>


                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add User</button>
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
