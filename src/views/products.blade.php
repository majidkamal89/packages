<!DOCTYPE html>
<html>
<head>
    <title>Product App</title>
</head>
<body>
<ul>
    @foreach($products as $product)
        <li style="background-color: lightblue; color: white;">{!! $product->name !!} - {!! $product->price !!}</li>
    @endforeach
</ul>
</body>
</html>