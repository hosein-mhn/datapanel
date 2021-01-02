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
                    <h4>ساخت سوال جدید</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('questions.store')}}">
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">سوال</label>
                    <input type="text" name="description" class="form-control" id="exampleFormControlInput1">
                </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۱</label>
                        <input type="text" name="option1" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۲</label>
                        <input type="text" name="option2" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۳</label>
                        <input type="text" name="option3" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۴</label>
                        <input type="text" name="option4" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">پاسخ تشحریحی</label>
                        <input type="text" name="answer" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">پاسخ صحیح</label>
                        <select name="correct_option">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                     </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">موضوع</label>
                        <select name="category_id" type="number" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach()
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
