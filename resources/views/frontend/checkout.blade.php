<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out Page</title>
    <style>
        .labeling{
    background: #00715d;
    width: 100%;
    color: white;
    border-radius: 5px;
    padding: 8px

}
.main-check-out-section{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    padding: 25px;
    border-radius: 5px
}
.btn{
    padding: 10px 25px;
    background:#00715d;
    color: white;
    transition: 0.5s;
    position: absolute;
    bottom: 0;
    /* left: 0 */

}
.btn:hover{
    color: #00715d;
    background: none;
    border: 1px solid #00715d;
    transition: 0.5s;
}
span{
    padding: 1px 9px;
    border: 1px solid  #00715d;
    font-weight: bold;
    border-radius: 50%;
    color: #00715d
}
.purchase{
    background: rgb(204, 202, 202);
    padding: 8px;
    color: black;
    width: 100%;
    font-weight: 600;
    font-size: 1rem;

}
@media (max-width:992px) and (min-width:295px){
    .btn{
        position: relative;
        /* bottom: 25px; */
    }
}
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
</head>

<body>
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
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-12">
                    <div class="main-check-out-section">
                        <div class="start-checkout text-center">
                            <label for="" class="labeling">Fill the form below to complete the purchase.</label>
                        </div>

                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="form-section">
                                    <form action="#">
                                        <h5 class=""><span>*</span> Your Basic Information</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="phone" placeholder=" Your Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="Your Email Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" placeholder="Your Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="checkout">By clicking checkout button Now you are agreed to our <a href="#">terms and conditions</a>.</label>
                                        </div>

                                        <div class="form-group text-base align-bottom">
                                            <a href="#">
                                                <button class="btn">Check Out Now</button>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="product-desc-section">
                                    <div class="">
                                        <label for="" class="purchase p-1">Purchase Details</label>
                                    </div>

                                    <div class="detail-section ">
                                        <h5 class="">Product Name</h5>
                                        <input type="file" >
                                        <h5 class="">Price:Rs.275</h5>
                                        {{-- <p class=""> </p> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>
