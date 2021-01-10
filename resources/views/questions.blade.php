<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                    <h4>سوالات</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">توضیح</th>
                            <th scope="col">موضوع</th>
                            <th scope="col">حذف</th>
                            <th scope="col">ویرایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <th>{{$question->id}}</th>
                                <td>{{$question->description}}</td>
                                <td>{{$question->category->title}}</td>
                                <td>
                                    <form action="{{route('questions.destroy',$question->id)}}" method="post">
                                        <input class="btn btn-danger" type="submit" value="حذف"/>
                                        {!! method_field('delete') !!}
                                        {!! csrf_field() !!}
                                    </form>

                                </td>
                                <td>
                                    <a href="{{route('questions.edit',$question->id)}}" class="btn btn-info"
                                       type="submit">ویرایش</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('questions.create')}}" class="btn btn-success">افزودن</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
