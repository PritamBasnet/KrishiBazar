<div>
    <div class="row" style="display: flex;justify-content:end;">
        <div class="mb-3" style="display: flex;justify-content:end;">
            <button class="GrayBackgroundBtn" style="height: 45px;width:140px;display:flex;justify-content:center; align-items:center;font-size:12px;" wire:click="classActive">Filter Open</button>
        </div>
    </div>
    <div class="filterSidebar {{ $className }}">
        <div class="row">
            <h6 class="h6">Category</h6>
            <div style="padding-left: 18px;">
                <?php
                $category = App\Models\Category::all();
                ?>
                @isset($category)
                    @foreach ($category as $data)
                        <div class="form-check">
                            <input class="form-check-input" wire:model="categoryFilter" type="checkbox" value="{{ $data->id }}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ $data->name }}
                            </label>
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="row" style="padding: 0 !important;">
                <label for="" style="padding-top: 15px;">Price (Rs)</label>
                <div class="col-md-12">
                    <div class="mb-3">
                        <input type="number" class="form-control" wire:model="fromPrice" id="exampleFormControlInput1" placeholder="From Rs">
                      </div>
                </div>
            </div>
        </div>
    </div>
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
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</div>
