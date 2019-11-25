@extends('admin/layouts/main')

@section('title', '讲师')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/lecturerAddhandel')}}" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">讲师名称：</label>
        <input type="text" class="form-control" name="lect_name" placeholder="名称">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">讲师个人简历：</label>
        <input type="text" class="form-control" name="lect_resume" placeholder="个人简历">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">讲师授课风格：</label>
        <input type="text" class="form-control" name="lect_style" placeholder="授课风格">
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html>
@endsection
