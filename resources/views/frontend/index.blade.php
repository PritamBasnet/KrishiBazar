@extends('frontend.layout.master')
@section('frontend-content')
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
                <a href="/farmer/register" class="GrayBackgroundBtn" >Be a seller</a>
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
    <livewire:product-show />


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

@endsection