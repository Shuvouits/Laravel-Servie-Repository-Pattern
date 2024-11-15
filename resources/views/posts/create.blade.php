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
        <a href="{{route('posts.index')}}" class="btn btn-primary btn-sm px-5 mb-5">Back</a>

        <form method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group">
                <label class="form-label">Title</label>
                <input class="form-control" name="title" placeholder="Enter Title" />

            </div>

            <div class="form-group">
                <label class="form-label">Content</label>
                <textarea class="form-control" name="content" placeholder="Enter Content"></textarea>

            </div>

            <button type="submit" class="btn btn-primary btn-sm w-100 mt-3">Submit</button>

        </form>

    </div>

</body>

</html>
