<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @if (Session::has('message'))
      <p>{{ Session::get('message') }}</p>
  @endif

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
      @endforeach
    </ul>
  @endif
  <form action="{{ route('test.store') }}" method="POST">
    @csrf
    <input type="text" name="title" id="" placeholder="enter the title of product" value="{{ old('title') }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <textarea name="description" placeholder="description"></textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Submit</button>
  </form>
</body>
</html>