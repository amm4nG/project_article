<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .img-cover {
        height: 200px;
        object-fit: cover;
    }
</style>

<body> 
    <div class="container mt-3">
        <div class="row">
            <h1>Website Articles</h1>

            <!-- ambil variable $articles yang dikirim dari controller -->
            @foreach ($articles as $article)
            <div class="col-md-4 mb-3 mt-3">
                <a href="{{ route('articles.show', $article->id) }}">
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