<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="password">email</label>
        <input type="text" id="email" name="email"><br>
        <label for="password">password</label>
        <input type="password" id="password" name="password"><br>
        <label for="password">comfirmed password</label>
        <input type="password" name="password_confirmation"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
