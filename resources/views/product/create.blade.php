<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('test.store') }}" method="POST">
    @csrf
    <input type="text" name="title" id="" placeholder="enter the title of product">
    <button type="submit">Submit</button>
  </form>
</body>
</html>