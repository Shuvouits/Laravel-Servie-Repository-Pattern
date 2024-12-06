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
        <a href="{{route('user.index')}}" class="btn btn-primary btn-sm px-5 mb-5">Back</a>

        <form method="post" action="{{route('user.update',$user->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label">Name</label>
                <input class="form-control" name="name" value="{{$user->name}}" placeholder="Enter Name" />

            </div>

            <div class="form-group">
                <label class="form-label">Email</label>
                <textarea class="form-control" name="email"  placeholder="Enter Email">{{$user->email}}</textarea>

            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <textarea class="form-control" name="password" placeholder="Enter Password">{{$user->password}}</textarea>

            </div>

            <button type="submit" class="btn btn-primary btn-sm w-100 mt-3">Update</button>

        </form>

    </div>

</body>

</html>
