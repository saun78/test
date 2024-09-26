<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('add_to_cart',$product->id) }}" method="POST">
    @csrf
    <label for="">Product</label>
    <input type="text" name="p_name" value="{{ $product->p_name }}" readonly><br>
    <label for="">Mass</label>
    <input type="number" name="p_mass" onchange="calculate()" value="{{ $product->p_mass }}"><br>
    <label for="">Price</label>
    <input type="text" name="p_price" value="{{ $product->p_price }}" readonly><br>
    <label for="">total price</label>
    <input type="text" name="total_price"><br>
    <input type="submit" name="add to cart" value="add to cart">
</form>
    <a href="/index">back to main page</a>
</body>
</html>
<script>
    function calculate(){
     
     var mass = document.querySelector('input[name="p_mass"]').value;
     var price = document.querySelector('input[name="p_price"]').value;

     var total_price = mass/100 * price;

     document.querySelector('input[name="total_price"]').value = total_price;
     }
</script>