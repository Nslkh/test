<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @if (count($products))
    @foreach ($products as $product)
      {{ $product }}
    @endforeach
  @else
  <p>No any products to show</p>
  @endif
</body>
</html>