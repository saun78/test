<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <label for="">Product</label>
    <input type="text" name="p_name" value="{{ $product->p_name }}" readonly><br>
    <label for="">Mass</label>
    <input type="number" name="p_mass" value="{{ $product->p_mass }}"><br>
    <label for="">Price</label>
    <input type="text" name="p_price" value="{{ $product->p_price }}" readonly><br>
    <label for="">total price</label>
    <input type="text" name="total_price" readonly><br>
    <input type="submit" name="add to cart">
    <a href="/index">back to main page</a>
</body>
</html>
{{-- <script>
    function calculate
     
     var queryselector().value
</script> --}}