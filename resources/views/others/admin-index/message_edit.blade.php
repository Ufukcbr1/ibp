
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card-body table-responsive p-0">
    <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <tr>
                    <th>Id</th> <td>{{ $data->id}}</td>
                </tr>
                <tr>
                    <th>Name</th><td>{{ $data->name}}</td>
                </tr>
                <tr>
                    <th>Email</th>  <td>{{ $data->email}}</td>
                </tr>
                <tr>
                    <th>Subject</th><td>{{ $data->subject}}</td>
                </tr>
                <tr>
                    <th>Message</th>   <td>{{ $data->message}}</td>
                </tr>
                <tr>
                    <th>Admin Note</th>
                    <td>
                        <textarea id="note" name="note" >{{ $data->note}} </textarea>

                    </td>
                </tr>
                <td></td>
                <td>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Message</button>
                    </div>
                </td>
                </tr>
            </table>

        </div>
        <!-- /.card-body -->


    </form>




    <!-- /.card-body -->
    <div class="card-footer">
        ..
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->

</div>
</body>
</html>
