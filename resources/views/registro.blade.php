<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIMNASIO</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col text-center mt-4">
                <label for="inputUsername">Username</label>
                <input type="text" name="email" id="email" class="form-control" aria-describedby="usernameHelpBlock">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
                @if(session('error'))
                    <div class="invalid-feedback d-block">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
