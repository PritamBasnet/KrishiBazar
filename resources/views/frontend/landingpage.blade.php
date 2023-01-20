<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/mobile.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    {{-- Header  --}}
    <header class="header">
        <div class="logo">
            <a href="">
                <img src="{{ asset('frontend/image/logo.png') }}" width="100%" alt="">
            </a>
        </div>
        <nav class="nav">
            <ol>
                <li><a href="">Home</a></li>
                <li><a href="">Farmer</a></li>
                <li><a href="">Product</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="" class="getStarted">Get Started</a></li>
            </ol>
        </nav>
        <div class="hamburger" onclick="sidebarOpen()">
            <i class="bi bi-list"></i>
        </div>
    </header>
    <aside id="sidebar">
        <div class="hamrClose" onclick="sidebarClose()">
            <i class="bi bi-x-lg"></i>
        </div>
        <ol>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ol>
    </aside>
    {{-- Header end --}}
    {{-- landing section  --}}
    <section class="landingSection">
        <div class="landingWrapper"
            style="background-image: url('https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFybWluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')">
            <span></span>
            <div>
                <h2>The Hearth of the Farm
                    <br>
                    Is True Center Of The Universe
                </h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla laborum quisquam reprehenderit cum
                    quae obcaecati sequi quaerat dolorum commodi!</p>
                <a href="" class="GrayBackgroundBtn">Contact Now</a>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row" style="padding-top: 30px;">
            {{-- <video width="100%" height="340" autoplay muted loop
                    style="border-radius: 12px !important; overflow:hidden;">
                    <source src="{{ asset('frontend/video/videoplay.mp4') }}" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video> --}}
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="icon-wrapper"
                    style="width: 100%;margin:30px 0; display:flex;flex-direction:column; gap:12px; justify-content:center;align-items:center;">
                    <img src="{{ asset('frontend/image/gardening.png') }}" alt="">
                    <h4 class="h6">Best Services</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-wrapper"
                    style="width: 100%;margin:30px 0; display:flex;flex-direction:column; gap:12px; justify-content:center;align-items:center;">
                    <img src="{{ asset('frontend/image/wheat-sack.png') }}" alt="">
                    <h4 class="h6">100% Natural</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-wrapper"
                    style="width: 100%;margin:30px 0; display:flex;flex-direction:column; gap:12px; justify-content:center;align-items:center;">
                    <img src="{{ asset('frontend/image/wheelbarrow.png') }}" alt="">
                    <h4 class="h6">Farm Equipment</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-wrapper"
                    style="width: 100%;margin:30px 0; display:flex;flex-direction:column; gap:12px; justify-content:center;align-items:center;">
                    <img src="{{ asset('frontend/image/farmer.png') }}" alt="">
                    <h4 class="h6">Fully Experienced</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="stylishTitleRow">
                    <span class="grayish">About us</span>
                    <div>
                        <h1 style="color: #58b064;">Let Us</h1>
                        <h1>Let You Tell Our Story</h1>
                    </div>
                    <div class="icon-stylish">
                        <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
                        <span></span>
                    </div>
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus odit omnis
                        nulla libero ducimus quod illo, recusandae fugit reprehenderit iste, ut asperiores consequatur
                        sequi nisi impedit architecto voluptate delectus id?</p>
                    <a href="" class="GrayBackgroundBtn">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <video width="100%" height="340" autoplay muted loop
                    style="border-radius: 12px !important; overflow:hidden;">
                    <source src="{{ asset('frontend/video/videoplay.mp4') }}" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <div class="row" style="display: flex;justify-content:center;align-items:center;">
        <div class="stylishTitleRow"
            style="display: flex; width:fit-content; height:fit-content;:center;align-items:center;">
            <span class="grayish">Featured Product</span>
            <div>
                <h1 style="color: #58b064;">Our Product</h1>
                <h1>Are Highest Quality</h1>
            </div>
            <div class="icon-stylish">
                <span></span>
                <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
                <span></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="product-card text-center">
                    <div class="product-img">
                        <img src="https://preview.colorlib.com/theme/farmie/img/bg-img/p1.jpg" alt="">
                    </div>
                    <div class="product-icon text-center">
                        <span>
                            <a href="#" class="icon"><i class="fa-solid fa-cart-plus"></i></a>
                        </span>
                    </div>
                    <div class="product-content">
                        <a href="" class="product-name">Strawberry</a>
                        <p class="">Rs.225</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row" style="display: flex;justify-content:center;align-items:center;">
        <div class="stylishTitleRow"
            style="display: flex; width:fit-content; height:fit-content;:center;align-items:center;">
            <span class="grayish">MAKE THE GREEN WORLD</span>
            <div>
                <h1 style="color: #58b064;">Farming Practices</h1>
                <h1>To Preserve Land & Water</h1>
            </div>
            <div class="icon-stylish">
                <span></span>
                <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
                <span></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="blog-link">
                    <div class="blogWrapper">
                        <div class="blogImage">
                            <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="blogContent">
                            <h5 class="blog-header">You must do this you must do that</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                            <a href="" class="blog-btn" style="text-decoration: none;color:black;">READ MORE</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="blog-link">
                    <div class="blogWrapper">
                        <div class="blogImage">
                            <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="blogContent">
                            <h5 class="blog-header">You must do this you must do that</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                            <a href="" class="blog-btn" style="text-decoration: none;color:black;">READ MORE</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="blog-link">
                    <div class="blogWrapper">
                        <div class="blogImage">
                            <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="blogContent">
                            <h5 class="blog-header">You must do this you must do that</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                            <a href="" class="blog-btn" style="text-decoration: none;color:black;">READ MORE</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-md-2 col-12 text-right">
                <a href="#" ><button class="view-all-btn">View All</button></a>
            </div>
        </div>
    </div>


    <div class="row" style="display: flex;justify-content:center;align-items:center;">
        <div class="stylishTitleRow"
            style="display: flex; width:fit-content; height:fit-content;:center;align-items:center;">
            <span class="grayish">Our Glorious Services</span>
            <div>
                <h1 style="color: #58b064;">Farming Services</h1>
                <h1>To Preserve Land & Water</h1>
            </div>
            <div class="icon-stylish">
                <span></span>
                <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
                <span></span>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="row p-1">
                <div class="col-md-4 col-12">
                    <div class="card mb-2">
                        <a href="" class="service-link">
                            <div class="card-body text-center">
                                <img src="https://preview.colorlib.com/theme/farmie/img/bg-img/p1.jpg" class="cardimg card-title" height="100px"
                                    width="100px">
                                <h5 class="card-title" style="color: black; ">Farm factory</h5>
                                <p class="card-text" style="color: black;">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Blanditiis
                                    voluptatum vel rerum? Voluptates
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card mb-2">
                        <a href="" class="service-link">
                            <div class="card-body text-center">
                                <img src="https://preview.colorlib.com/theme/farmie/img/bg-img/p1.jpg" class="cardimg card-title" height="100px"
                                    width="100px">
                                <h5 class="card-title" style="color: black; ">Farm factory</h5>
                                <p class="card-text" style="color: black;">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Blanditiis
                                    voluptatum vel rerum? Voluptates
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card mb-2">
                        <a href="" class="service-link">
                            <div class="card-body text-center">
                                <img src="https://preview.colorlib.com/theme/farmie/img/bg-img/p1.jpg" class="cardimg card-title" height="100px"
                                    width="100px">
                                <h5 class="card-title" style="color: black; ">Farm factory</h5>
                                <p class="card-text" style="color: black;">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Blanditiis
                                    voluptatum vel rerum? Voluptates
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-2 col-12 text-right">
                    <a href="#" ><button class="view-all-btn">View All</button></a>
                </div>
            </div>
        </div>
    </div>


    {{-- footer  --}}
    <div class="section">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="curvy-bg" viewBox="0 0 1440 320"><path fill="#00715d" fill-opacity="1" d="M0,0L48,21.3C96,43,192,85,288,101.3C384,117,480,107,576,101.3C672,96,768,96,864,112C960,128,1056,160,1152,154.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> --}}
        <div class="container">
            <div class="row p-1" style="z-index: 9999 !important">
                <div class="col-md-3 col-12">
                    <div class="site-logo">
                        <a href="">
                            <img src="{{ asset('frontend/image/footlogo.jpeg') }}" width="100%" alt="">
                        </a>
                    </div>

                    <div class="about-logo p-1">
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt placeat
                            consequuntur nisi. </p>
                    </div>

                    <div class="icon">
                        <span>
                            <a href="#" class="footer-icon"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="footer-icon"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" class="footer-icon"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="footer-icon"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="footer-icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <h5 class="">Quick Link</h5>
                    <div class="row">
                        <div class="col-6">
                            <span>
                                <a href="#" class="footer-link">Home</a><br>
                                <a href="#" class="footer-link">Home</a><br>
                                <a href="#"class="footer-link">Home</a><br>
                                <a href="#" class="footer-link">Home</a><br>
                                <a href="#" class="footer-link">Home</a><br>
                            </span>
                        </div>
                        <div class="col-6">
                            <span>
                                <a href="#" class="footer-link">Home</a><br>
                                <a href="#" class="footer-link">Home</a><br>
                                <a href="#"class="footer-link">Home</a><br>
                                <a href="#" class="footer-link">Home</a><br>
                                <a href="#" class="footer-link">Home</a><br>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <h5 class="">Contact Us</h5>
                    <div class="contact-detail">
                        <p class="contact-item">8901 Marmora Road Glasgow, DO4 89GRcdb hsdgxedb .</p>
                        <p class="contact-item"><i class="fa-solid fa-phone"></i> &nbsp;<a href="#"
                                class="phone">+977-98554545454</a></p>
                        <p class="contact-item"><i class="fa-solid fa-envelope"></i> &nbsp;<a href="#"
                                class="phone">wwwwwwwebsite@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <h5 class="">News Letter</h5>
                    <div class="form">
                        <form action="">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email here" class="form-control">
                                <button class="btn p-2 ">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Landing section design --}}




    <script>
        function sidebarOpen() {
            let sideBar = document.getElementById('sidebar');
            sideBar.style.transform = "translateX(0px)";
        }

        function sidebarClose() {
            let sideBar = document.getElementById('sidebar');
            sideBar.style.transform = "translateX(240px)";
        }
    </script>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
