@extends('frontend.layout.master')
@section('frontend-content')
    {{-- Header end --}}
    {{-- landing section  --}}
    <section class="landingSection">
        <div class="landingWrapper"
            style="background-image: url('https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFybWluZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')">
            <span></span>
            <div>
                <h2>The Heart of the Farm
                    <br>
                    Is True Center Of The Universe
                </h2>
                <p>It can also involve the sale of agricultural inputs, such as fertilizer and feed, as well as the sale of processed and packaged agricultural products, such as canned fruits and vegetables.</p>
                <a href="/farmer/register" class="GrayBackgroundBtn">Be a seller</a>
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
                        <h1> Tell Our Story</h1>
                    </div>
                    <div class="icon-stylish">
                        <img src="{{ asset('frontend/image/leaf.png') }}" alt="">
                        <span></span>
                    </div>
                    <p class="para">Krishi Bajar is marketplace web system which serves the farmers may benefits and convienient ways . Connecting Local Farmers with tech: An Online Agricultural Marketplace for business.It can also involve the sale of agricultural inputs, such as fertilizer and feed, as well as the sale of processed and packaged agricultural products, such as canned fruits and vegetables.</p>
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
            <span class="grayish">FERTILIZER PRODUCT</span>
            <div>
                <h1 style="color: #58b064;">Our Fertilizer</h1>
                <h1>To Grow Crops.</h1>
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
            <?php
                $fertilizer = App\Models\Product::where('is_fertilizer','=',1)->get();
                 ?>
            @isset($fertilizer)
                @foreach ($fertilizer as $data)
                    <div class="col-md-3 col-12">
                        <div class="product-card text-center">
                            <div class="product-img">
                                <img src="{{ asset($data->image) }}" alt="">
                            </div>
                            <div class="product-icon text-center">
                                <span>
                                    <a href="/checkout/{{ $data->id }}" class="icon"><i class="fa-solid fa-cart-plus"></i></a>
                                </span>
                            </div>
                            <div class="product-content">
                                <a href="" class="product-name">{{ $data->name }}</a>
                                <p class="">Rs {{ $data->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
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
            <?php
            $blog = App\Models\Blog::all();
            ?>
            @isset($blog)
                @foreach ($blog as $data)
                    <div class="col-md-4">
                        <div class="blogWrapper">
                            <div class="blogImage">
                                <img src="{{ asset($data->image) }}" width="100%" alt="">
                            </div>
                            <div class="blogContent">
                                <h5 class="blog-header" style="color: black;">{{ $data->name}}</h5>
                                {{-- <p style="color: white;text-overflow: ellipsis;">{!! Str::limit($data->desc,'100','....') !!}</p> --}}
                                <a href="/blog/detail/{{ $data->id }}" class="blog-btn" style="text-decoration: none;color:black;">READ
                                    MORE</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
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
                <?php 
                $service = App\Models\Service::all();
                    ?>
                @isset($service)
                    @foreach ($service as $data)
                        <div class="col-md-4 col-12">
                            <div class="card mb-2">
                                <a href="/service/detail/{{ $data->id }}" class="service-link">
                                    <div class="card-body text-center">
                                        <img src="{{ asset($data->image) }}"
                                            class="cardimg card-title" height="100px" width="100px">
                                        <h5 class="card-title" style="color: black; ">{{ $data->name }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>

@endsection
