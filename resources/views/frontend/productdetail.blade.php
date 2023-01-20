@extends('frontend.layout.master')
@section('frontend-content')
<style>

    :root{
    --swiper-navigation-size:22px !important;
}


    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* body {
        background: #000;
        color: #000;
    } */

    .swiper {
        width: 100%;
        height: 200px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 40%;
        width: 100%;
    }

    .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 50%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .button {
        background: #3f4;
        color: white;
        padding: 8px 35px;
        outline: none !important;
        border: none !important;

    }
    .swiper-button-next, .swiper-button-prev{
        font-size: 20px;
    }
</style>
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <img src="{{ asset($product->image) }}" />
                        </div>
                        <?php 
                            $images = json_decode($product->images);
                        ?>
                        @foreach ($images as $img) 
                            <div class="swiper-slide">
                                <img src="{{ asset($img) }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset($product->image) }}" />
                        </div>
                        @foreach ($images as $img)
                            <div class="swiper-slide">
                                <img src="{{ asset($img) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12">
                <div class="detail-start">
                    <h3 class="" style="background: beige;padding:5px">Product detail</h3>
                    <h4 class="p-1">{{ $product->name }}</h4>
                    <h5 class="p-1">Rs.{{ $product->price }}</h5>
                    <p class="p-1" style="text-align: justify">{{ $product->desc }}</p>
                    <a href="/checkout/{{ $data->id }}">
                        <button class="button">Purchase</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Swiper JS -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
@endsection