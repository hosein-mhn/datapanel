<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <style>
        .progress {
            position: relative;
            width: 100%;
        }

        .bar {
            background-color: #00ff00;
            width: 0%;
            height: 20px;
        }

        .percent {
            position: absolute;
            display: inline-block;
            left: 50%;
            color: #040608;
        }
    </style>
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
                    <h4>جزوه جدید</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('booklets.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">عنوان</label>
                            <input name="title" type="text" class="form-control" required><br/>
                            <label class="form-label">موضوع</label>
                            <select name="category_id" type="number" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach()
                            </select>
                            <br/>
                            <input name="file" type="file" class="form-control" required><br/>
                            <div class="progress">
                                <div class="bar"></div>
                                <div class="percent">0%</div>
                            </div>
                            <br>
                            <input type="submit" value="ذخیره" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var SITEURL = "{{URL('/')}}";
    $(function () {
        $(document).ready(function () {
            var bar = $('.bar');
            var percent = $('.percent');
            $('form').ajaxForm({
                beforeSend: function () {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function (xhr) {
                    alert('File Has Been Uploaded Successfully');
                    window.location.href = SITEURL + "/" + "booklets";
                }
            });
        });
    });
</script>
</body>

</html>
