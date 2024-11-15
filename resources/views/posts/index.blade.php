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
        <a href="{{route('posts.create')}}" class="btn btn-primary btn-sm px-5 mb-5">Create Post</a>
        <table class="table table-striped">
            <thead>

                <th>Sl</th>
                <td>Title</td>
                <td>Content</td>

            </thead>

            <tbody>
                @foreach($posts as $index=>$item)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->content}}</td>

                </tr>
                @endforeach

            </tbody>


        </table>

    </div>

</body>

</html>
