<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>
    <style>
        *{
            font-family:'BYekan',Sans-Serif;
        }
    </style>
    <title>Category</title>
</head>
<body class="bg-dark">
@include('navbar')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    <h4> ویرایش موضوع</h4>
                </div>
                <div class="card-body">
                <form method="post" action="{{route('categories.update',$category->id)}}">
                    {!! method_field('put') !!}
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">عنوان</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$category->title}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">توضیحات</label>
                    <input type="text" name="description" class="form-control" id="exampleFormControlInput1" value="{{$category->description}}">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="lesson_id" class="form-control" id="exampleFormControlInput1" value="{{$category->lesson_id}}">
                </div>
                    <input type="submit"  value="ذخیره" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
