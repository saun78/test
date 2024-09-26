<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <table>
            <tr>
                <th>product</th>
                <th>mass</th>
                <th>price</th>
                <th>status</th>
                <th>time</th>
            </tr>
            @foreach ($carts as $cart)
            <tr>
                @csrf
                
                <td>{{ $cart->p_name }}</td>
                <td>{{ $cart->total_mass }}</td>
                <td>{{ $cart->total_mass * $cart->p_price/100 }}</td>
                <td>{{ $cart->status }}</td>
                <td>{{ $cart->date}}</td>
            </tr>
            @endforeach
        </form>
        </table>
        <a href="/index">back to main page</a>
  
</body>
</html>
