<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand m-2" href="#">گام</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form action="{{ route('logout') }}" method="post">
                    <input class="btn btn-danger" type="submit" value="خروج"/>
                    {!! csrf_field() !!}
                </form>

            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('booklets.index')}}">جزوه</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('categories.index')}}">موضوع</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('videos.index')}}">ویدیو</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('pdfs.index')}}">پی دی اف</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('questions.index')}}">سوال</a>
            </li>

        </ul>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
