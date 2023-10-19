<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <lable>Enter Name:</lable>
    <input type="text" name="std_name" ><br>
    @error('std_name')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    <lable>Select Image:</lable>
    <input type="file" name="std_image" value="{{ old('std_image') }}"><br>
    @error('std_image')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Upload">

</form>
@if(session('status'))
    <h5 style="color:green;">{{session('status')}}</h5>
@endif
</body>
</html>
