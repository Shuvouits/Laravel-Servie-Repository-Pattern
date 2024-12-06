<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-4 p-5  text-white rounded " style="background: gainsboro">
        <a href="{{route('user.create')}}" class="btn btn-primary btn-sm px-5 mb-5">Create User</a>
        <table class="table table-striped">
            <thead>

                <th>Sl</th>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Action</td>

            </thead>

            <tbody>

                @foreach($users as $index=>$item)
               <tr>
                   <td>{{$index+1}}</td>
                   <td>{{$item->name}}</td>
                   <td>{{$item->email}}</td>
                   <td>{{$item->password}}</td>
                   <td>
                    <a href="{{route('user.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                   </td>
               </tr>
               @endforeach

            </tbody>


        </table>

    </div>

</body>

</html>
