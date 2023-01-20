@extends('frontend.layout.master')
@section('frontend-content')
    <div class="smallBackground">
        <img src="{{ asset('frontend/image/small.jpg') }}" alt="">
        <h4 class="h3">ABOUT US</h4>

    </div>
    <div class="container">
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
    <div class="row" style="display: flex;justify-content:center;align-items:center;">
        <div class="stylishTitleRow"
            style="display: flex; width:fit-content; height:fit-content;:center;align-items:center;">
            <span class="grayish">MEET OUR FARMER</span>
            <div>
                <h1 style="color: #58b064;">Farmer who</h1>
                <h1>Sell Organic Foods</h1>
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
                    <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus odit omnis nulla
                        libero ducimus quod illo, recusandae fugit reprehenderit iste, ut asperiores consequatur sequi nisi
                        impedit architecto voluptate delectus id?</p>
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
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="memberWrapper">
                    <img src="https://cdn.who.int/media/images/default-source/tobacco/2.jpg?sfvrsn=3342449c_19&Status=Master"
                        alt="">
                    <h4 class="h">Anish Khadka</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
