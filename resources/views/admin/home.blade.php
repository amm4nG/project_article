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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Articles</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link" href="{{ route('new.create') }}">New Article</a>
                    <a class="nav-link text-danger" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3"> 
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-4 mb-3 mt-3">
                        <a href="{{ route('home.show', $article->id) }}">
                            <div class="card shadow-lg">
                                    <img class="img-cover" src="{{ asset('storage/'.$article->image) }}" alt="">
                                <div class="card-footer mb-3">
                                    <h6 class="mt-3">{{ $article->title }}</h6> 
                                </div> 
                            </div>
                        </a>
                    </div>
                @endforeach 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>