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
            </tr>
            @foreach ($carts as $cart)
            <form action="{{ route('checkout_show', $cart->id) }}" method="POST">
            <tr>
                @csrf
                <td>{{ $cart->p_name }}</td>
                <td>{{ $cart->total_mass }}</td>
                <td>{{ $cart->total_mass * $cart->p_price/100 }}</td>
                <td>{{ $cart->status }}</td>
            </tr>
            @endforeach
            <input type="submit" name="checkout" value="checkout">
        </form>
        </table>
  
</body>
</html>
