<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
@foreach ($products as $product)
        <p>ID : {{ $product->id}}</p>
        <p>code : {{ $product->code }}</p>
        <p>Nama : {{ $product->name }}</p>
        <p>description : {{ $product->qty }}</p>
        <p>Angkatan : {{ $product->angkatan }}</p>
        <p>Price : {{ $product->price }}</p>
    @endforeach
</body>
</html>