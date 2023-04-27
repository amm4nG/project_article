<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- form login admin -->
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center mb-3">ADMIN LOGIN</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card shadow-lg">
                    <form action="{{ route('validasi') }}" method="post" class="form-control p-4">
                        @csrf
                        <input type="text" value="{{ old('username') }}" name="username" class="form-control" autofocus placeholder="username" required>
                        <input type="password" name="password" class="form-control mt-3" autofocus placeholder="password" required>
                        <button class="btn btn-primary mt-4 form-control">Login</button>
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