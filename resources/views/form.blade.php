<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <form action="/post" method="POST">
        @csrf

        <p>Username</p>
        <div>
            <input type="text" name="username" value="{{ old('username') }}">
        </div>

        <p>Password</p>
        <div>
            <input type="password" name="password"  value="{{ old('password') }}">
        </div>

        <br>

        <div>
            <button type="submit">Login</button>
        </div>
    </form> --}}

    @inject('cookie', 'Illuminate\Support\Facades\Cookie')

<p>Hello, {{ $cookie->get('name') }}</p>

<form action="/post" method="POST">
    @csrf

    <div>
        <button type="submit">Set cookie</button>
    </div>
</form>
</body>
</html>
