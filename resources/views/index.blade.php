<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
        <table>
            <tr>
                <th>product</th>
                <th>mass</th>
                <th>price</th>
            </tr>
            <tr>
                <td>{{ $product->p_name }}</td>
                <td>{{ $product->p_mass }}</td>
                <td>{{ $product->p_price }}</td>
                <td><a href="{{ route('show', $product->id) }}">buy</a></td>
            </tr>
        </table>
    @endforeach
</body>
</html>