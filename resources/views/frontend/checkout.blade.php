<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
        <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleFormControlInput1" >
                      </div>
                </div>
                <div class="col-md-6 col-12" style="padding-top: 20px;">
                    <div class="mb-3">
                        <input class="form-control" name="product_name" type="text" value="{{ $product->name }}" aria-label="Disabled input example" >
                    </div>
                    <input type="text" name="image" style="opacity: 0;" value="{{ $product->image }}">
                    <img src="{{ asset($product->image) }}" class="smallImage" style="height: 140px;width:200px; object-fit:cover;object-position:center;" alt="">
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
