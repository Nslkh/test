<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @forelse ($products as $product)
    {{ $product }}
  @empty
  <p>No any products to show</p>      
  @endforelse
</body>
</html>