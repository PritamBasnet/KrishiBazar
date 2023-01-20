<!doctype html>
<html lang="en">

<head>
    <title>BLOG DETAIL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
   .blog-detail-title{
    margin-top: 20px;
    font-weight: 900;
}
 .user-icon{
    margin-right: 10px;
    padding: 5px;
    border: 1px solid gray;
    border-radius: 50px;
}
.nav-item{
    padding-right: 20px;
    margin-top: 10px;
}
.blog-detail-title{
    margin-top: 20px;
    font-weight: 900;
}
.blog-detail-image{
    overflow: hidden;
    margin-top: 20px;
    position: relative;
}
.blog-detail-image img{
    height: 400px;
    width: 100%;
    border-radius: 5px;
}
.blog-detail-image p{
    text-align: justify;
    font-size: 18px;
    margin-top: 30px;
}
.blog-realted-articla{
    font-weight: 900;
    font-size: 35px;
    margin-top: 10px;
}
.latest-blog-link{
    font-weight: 900;
    font-size: 20px;
    color: rgba(0, 0, 0, 0.859);
}
.latest-blog-link:hover{
    text-decoration: none !important;
    color:rgba(0, 0, 0, 0.859) ;

}
.latest-blog:hover .latest-blog-link{
    color: green;
}
.position-stiky-side{
    position:sticky;
    top: 0px;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <h1 class="blog-detail-title">{{ $data->name }} </h1>

        </div>
        {{-- <div class="row">
            <ul class="nav">
                <li class="nav-item">
                    <span class="d-flex pr-2"><i class="fa-solid fa-user user-icon"></i>
                        <p>Admin</p>
                    </span>
                </li>
                <li class="nav-item">2059-09-22</li>
            </ul>
        </div> --}}
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="blog-detail-image">
                    <img src="{{ asset($data->image) }}" width="100%" alt="">
                    <p>
                        {!! $data->desc !!}
                    </p>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>