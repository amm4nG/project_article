<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .img-cover {
        height: 200px;
        object-fit: cover;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<body>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 mb-3 mt-3">
                <div class="card shadow-lg">
                    <img class="img-fluid" src="{{ asset('storage/'.$article->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-8 mt-3">

                <form id="update-form" action="{{ route('new.update', $article->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h1><input required type="text" class="form-control fs-1" value="{{ $article->title }}" name="title" id="">
                    </h1>
                    <textarea required name="description" class="form-control mb-3" id="" cols="30"
                        rows="5">{{ $article->description }}</textarea>
                    <label for="" class="mb-2">Edit Image</label>
                    <input type="file" value="{{ $article->image }}" class="form-control mb-3" name="image" id="">
                    <div class="input-group">
                        <!-- kembali -->
                        <a href="{{ route('home.index') }}" class="btn btn-primary shadow">Back</a>
                        <!-- update article -->
                        <button class="btn btn-warning" type="submit">Edit</button>
                        {{-- <a href="" class="btn btn-warning shadow">Edit</a> --}}
                </form>
                <!-- delete article -->
                <a href="" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                    class="btn btn-danger shadow">Delete</a>
                <form id="delete-form" action="{{ route('new.destroy', $article->id) }}" method="post">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>