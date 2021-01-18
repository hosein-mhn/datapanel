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
                    <h4>ساخت موضوع جدید</h4>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <form method="post" action="{{route('categories.store')}}">
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">عنوان</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">توضیحات</label>
                    <input type="text" name="description" class="form-control" id="exampleFormControlInput1">
                </div>
 <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> part_number   </label>
                    <input type="number" name="part" class="form-control" id="exampleFormControlInput1">
                </div>
 <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">start_page</label>
                    <input type="number" name="start_page" class="form-control" id="exampleFormControlInput1">
                </div>
 <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"�>end_page</label>
                    <input type="number" name="end_page" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">درس</label>
                    <select name="lesson_id" type="number" class="form-control">
                        @foreach($lessons as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach()
                    </select>
                </div>
                    <input type="submit" value="ذخیره" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
