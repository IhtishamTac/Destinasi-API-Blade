<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="col-6 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('postlogin') }}" method="POST" class="form-group">
                        @csrf
                        <h1 class="card-title">Login</h1>
                        <div class="mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mt-3 mb-3">
                            @if (Session::has('ermessage'))
                                <p class="alert alert-danger mb-3">{{ Session::get('ermessage') }}</p>
                            @endif
                            <button class="btn btn-success w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
