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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    {{-- Header  --}}
    <header class="header">
        <div class="logo">
            <h4 class="h4">FARMER BAZAR</h4>
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
    <div style="width: 100%;background-color:#eef6ef;">
        <div class="container">
            <main class="mainSection">
                <div class="mainContent">
                    <div style="z-index: 2;">
                        <h2>We are farmer bazar
                            <br>
                             for selling agriculture product.</h2>
                        <span>We are dependent on agriculture</span>
                        <a href="" class="GrayBackgroundBtn">Message Us</a>
                    </div>
                </div>
                <div class="mainImage">
                    <img data-scroll data-scroll-speed="-1.5"
                        src="https://images.unsplash.com/photo-1574943320219-553eb213f72d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8ZmFybWVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        width="100%" alt="">
                </div>
            </main>
        </div>
    </div>
    <div style="width:100%;background-color:#fafafa;">
        <div class="titleRow">
            <h3>Our Featured Product</h3>
        </div>
        <div class="container" style="padding: 30px 0; background-color:#fafafa;">
            <div class="row">
                <div class="col-md-3">
                    <div class="cardWrapper">
                        <div class="productImage">
                            <img src="https://images.unsplash.com/photo-1614414051203-03a7dc75eca5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdoZWF0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                        </div>
                        <div class="productContent">
                            <h6 class="h5">Wheat</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus iste sit doloremque similique voluptatum eligendi mollitia itaque nulla eos reiciendis!</p>
                        </div>
                        <a href="">Quick View</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardWrapper">
                        <div class="productImage">
                            <img src="https://images.unsplash.com/photo-1568584711271-6c929fb49b60?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGN1Y3VtYmVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                        </div>
                        <div class="productContent">
                            <h6 class="h5">Cucumber</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus iste sit doloremque similique voluptatum eligendi mollitia itaque nulla eos reiciendis!</p>
                        </div>
                        <a href="">Quick View</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardWrapper">
                        <div class="productImage">
                            <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bWFuZ298ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                        </div>
                        <div class="productContent">
                            <h6 class="h5">Mango</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus iste sit doloremque similique voluptatum eligendi mollitia itaque nulla eos reiciendis!</p>
                        </div>
                        <a href="">Quick View</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardWrapper">
                        <div class="productImage">
                            <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                        </div>
                        <div class="productContent">
                            <h6 class="h5">Orange</h6>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus iste sit doloremque similique voluptatum eligendi mollitia itaque nulla eos reiciendis!</p>
                        </div>
                        <a href="">Quick View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="blogWrapper">
                    <div class="blogImage">
                        <img src="https://images.unsplash.com/photor-1670152251109-4c17e78f023a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDEzfGJEbzQ4Y1Vod25ZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                    </div>
                    <div class="blogContent">
                        <h5 class="h5">You must do this you must do that</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                        <a href="" class="h6" style="text-decoration: none;color:black;">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Landing section design --}}
    <script>
        function sidebarOpen()
        {
            let sideBar = document.getElementById('sidebar');
            sideBar.style.transform = "translateX(0px)";
        }
        function sidebarClose()
        {
            let sideBar = document.getElementById('sidebar');
            sideBar.style.transform = "translateX(240px)";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>