<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>

<div class="my-5">
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
</div>

{{__('names.name')}}
<form method="post" action="{{route('product.store')}}">
    @csrf
    <div class="form-group">
        @error('product') {{$message}} @enderror
        <input value="{{old('product')}}" type="text" placeholder="Product name" name="product" class="form-control @error('product') is-invalid @enderror">
    </div>
    <div class="form-group">
        @error('price') {{$message}} @enderror
        <input value="{{old('price')}}" type="number" placeholder="Price" name="price" class="form-control @error('price') is-invalid @enderror">
    </div>
    <input type="submit" value="Submit">
</form>


</body>
</html>

