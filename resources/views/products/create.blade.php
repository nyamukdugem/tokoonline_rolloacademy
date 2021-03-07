<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="/products" method="post">
    @csrf
        Name : <input type="text" name="name"><br>
        Description : <input type="text" name="description"><br>
        Price : <input type="text" name="price"><br>
        Image : <input type="text" name="image_url"><br>
        <input type="submit" value="save">
    </form>
</body>
</html>