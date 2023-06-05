



<!--/*Bu kod parçası, admin-index.admin şablonunda yer alan tüm blokları ve içeriklerini dahil etmektedir.
r. Yani, admin-index.admin şablonunda tanımlanan öğeler (yield, section, show, endsection, vb.) bu dosyada kullanılabilir hale gelir.
*/
  -->



        <!-- Main content -->
        <section class="content">



            <!-- Default box -->
            <div class="card">
                <div class="card-header">
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
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Subject</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Content</th>


                                        </tr>
                                        </thead>

                                        @foreach($datalist as $rs)
                                            <tbody>
                                            <tr class="odd">
                                                <td>{{$rs->subject}}</td>

                                                <td>{{$rs->content}}</td>

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

