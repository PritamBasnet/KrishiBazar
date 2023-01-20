<div>
    <div class="container">
        <div class="row">
            @isset($product)
                @foreach ($product as $data)
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
                                <p class="">Rs. {{ $data->price }}</p>
                            </div>
                            {{-- <a href="/product/detail/{{ $data->id }}" class="text-primary">View More</a> --}}
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</div>
