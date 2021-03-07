<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="/products/{{$product->id}}" method="POST">
    @method('PUT')
    @csrf
        Name : <input type="text" name="name" value="{{$product->name}}"><br>
        Description : <input type="text" name="description" value="{{$product->description}}"><br>
        Price : <input type="text" name="price" value="{{$product->price}}"><br>
        Image : <input type="text" name="image_url" value="{{$product->image_url}}"><br>

        <input type="submit" value="save">
    </form>
</body>
</html>