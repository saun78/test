<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="password">email</label>
        <input type="text" id="email" name="email">
        @error('email')
            {{ 'message' }}
        @enderror
        <label for="password">password</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>