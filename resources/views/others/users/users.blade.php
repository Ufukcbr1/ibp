@extends('/others/admin-index.admin')



<!--/*Bu kod parçası, admin-index.admin şablonunda yer alan tüm blokları ve içeriklerini dahil etmektedir.
r. Yani, admin-index.admin şablonunda tanımlanan öğeler (yield, section, show, endsection, vb.) bu dosyada kullanılabilir hale gelir.
*/
  -->

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User List</h1>
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
                    <a href="{{route('user_add')}}"><button type="button" style="width:120px " class="btn btn-block btn-primary btn-lg"> Add User</button></a>
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

                    <!-- Main Table -->

                    <div class="card">


                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">



                                        <thead>
                                        <tr>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">id</th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Password</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"> Role</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Edit Role</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Edit</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Delete</th>
                                        </tr>
                                        </thead>

                                        @foreach($data as $rs)
                                            <tbody>
                                            <tr class="odd">
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->email}}</td>
                                                <td>{{$rs->password}}</td>
                                                <td>@foreach($rs->roles as $role)
                                                    {{$role->name}}
                                                @endforeach
                                                </td>


                                                <td>    <a href="{{route('user_show',['id'=>$rs->id] )}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                        <button type="button" style="width:120px " class="btn btn-block btn-primary btn-lg">Edit Role</button>
                                                    </a> </td>


                                                <td><a href="{{route('user_edit',['id'=>$rs->id])}}"><button type="button" style="width:120px " class="btn btn-block btn-primary btn-lg">Edit</button></a></td>
                                                <td><a href="{{route('user_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete!Are you sure ?')"><button type="button" style="width:120px " class="btn btn-block btn-primary btn-lg">Delete</button></a></td>
                                            </tr>
                                            </tbody>
                                        @endforeach


                                    </table>


                                </div>
                            </div>


                        </div>
                    </div>



                    <!-- /Main Table -->








                </div>
                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
