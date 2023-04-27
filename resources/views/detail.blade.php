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
                <h1>{{ $article->title }}</h1>
                <p style="text-align: justify">
                    {{ $article->description }}
                </p>
                <a href="{{ route('articles.index') }}" class="btn btn-primary mt-3">Back</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>