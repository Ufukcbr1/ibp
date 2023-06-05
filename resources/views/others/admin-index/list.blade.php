

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
    <table class="table table-hover text-nowrap" border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified at</th>
                <th>Password</th>
                <th>Role</th>
                <th style="...">Show</th>
                <th style="...">Delete</th>



            </tr>
        </thead>
        <tbody>
            @foreach($data as $rs)
            <tr>
                <td>{{$rs->id}}</td>
                <td>{{$rs->name}}</td>
                <td>{{$rs->email}}</td>
                <td>{{$rs->email_verified_at}}</td>
                <td>{{$rs->password}}</td>
                <td>
                @foreach($rs->roles as $role)
                {{$role->name}}
                @endforeach
                </td>

                 <td>
                 <a href="{{route('show',$rs->id )}}" class="btn btn-block btn-success btn-sm" onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                            Show
                </a>
                 </td>



                 <td>


                <form action="">
                <button type="submit" class="btn btn-primary">Delete</button>
                </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

