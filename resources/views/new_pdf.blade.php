<!DOCTYPE html>
<html>
<head>
    <title>پی دی اف جدید</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <style>
        .progress { position:relative; width:100%; }
        .bar { background-color: #00ff00; width:0%; height:20px; }
        .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
    </style>
    <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>
    <style>
        *{
            font-family:'BYekan',Sans-Serif;
        }
    </style>
</head>
<body class="bg-dark">
@include('navbar')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    <h4>ساخت پی دی اف جدید</h4>
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

                    <form method="post" action="{{route('pdfs.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">عنوان</label>
                            <input name="title" type="text" class="form-control"><br/>
                            <label for="exampleFormControlInput1" class="form-label">موضوع</label>
                            <select name="category_id" type="number" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach()
                            </select>
                            </div>
                            <input name="file" type="file" class="form-control"><br/>
                            <br>
                            <input type="submit"  value="ذخیره" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
