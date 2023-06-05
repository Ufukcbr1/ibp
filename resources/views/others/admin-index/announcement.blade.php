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
                        <h1></h1>
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
                    <a href="{{route('announcement_add')}}"><button type="button" style="width:120px " class="btn btn-block btn-primary btn-lg">Announcemenet Add</button></a>
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
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Subject</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Content</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Created at</th>

                                        </tr>
                                        </thead>

                                        @foreach($datalist as $rs)
                                            <tbody>
                                            <tr class="odd">
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->content}}</td>
                                                <td>{{$rs->created_at}}</td>

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
