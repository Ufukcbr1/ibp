
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
    <table class="table table-hover text-nowrap" border="1">
    <table class="table table-striped">
                    <tr>
                        <th style="width: 200px">Id</th>
                        <td>{{$data->id}}</td>
                    </tr>


                    <tr>
                        <th>Name & Surname</th>
                        <td>{{$data->name}}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{$role->name}}

                        </td>

                    </tr>
                    <tr>
                        <th >Cerated Date</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th >Update Date</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                    <tr>
                        <th >Add Role to User</th>
                        <td>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </div>

                        </td>











                </table>
    </table>
</div>
</body>
</html>
