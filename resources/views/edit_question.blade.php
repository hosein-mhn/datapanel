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
                    <form method="post" action="{{route('questions.update',$question->id)}}">
                        {!! method_field('put') !!}
                    @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">سوال</label>
                    <textarea name="description" class="form-control" id="exampleFormControlInput1">{{$question->description}}</textarea>
                </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۱</label>
                        <textarea name="option1" class="form-control" id="exampleFormControlInput1">{{$question->option1}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۲</label>
                        <textarea name="option2" class="form-control" id="exampleFormControlInput1">{{$question->option2}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۳</label>
                        <textarea name="option3" class="form-control" id="exampleFormControlInput1">{{$question->option3}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">گزینه ۴</label>
                        <textarea name="option4" class="form-control" id="exampleFormControlInput1">{{$question->option4}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">پاسخ تشحریحی</label>
                        <textarea name="answer" class="form-control" id="exampleFormControlInput1">{{$question->answer}}</textarea>
                    </div>

                    <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">گزینه صحیح</label>
                        <select name="correct_option">
                            <option value="1" @if($question->correct_option == 1) selected @endif>1</option>
                            <option value="2" @if($question->correct_option == 2) selected @endif>2</option >
                            <option value="3" @if($question->correct_option == 3) selected @endif>3</option>
                            <option value="4" @if($question->correct_option == 4) selected @endif>4</option>
                        </select>
                     </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">موضوع</label>
                        <select name="category_id" type="number" class="form-control">
                                <option value="{{$question->category->id}}">{{$question->category->title}}</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'option1' );
    CKEDITOR.replace( 'option2' );
    CKEDITOR.replace( 'option3' );
    CKEDITOR.replace( 'option4' );
    CKEDITOR.replace( 'answer' );
</script>
</body>
</html>
