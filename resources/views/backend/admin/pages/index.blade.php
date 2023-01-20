@extends('backend.admin.layout.master')
@section('backend-content')
@include('sweetalert::alert')

    <div class="row">
        <?php
            $categoryCount = App\Models\Category::count();
            $productCount = App\Models\Category::count();
            $serviceCount = App\Models\Category::count();
            $orderCount = App\Models\Category::count();
             ?>
        <div class="col-md-4 col-12">
            <div class="card counterCard">
                <h2 class="h2">Category</h2>
                <h3 class="h4">+{{ $categoryCount }}</h3>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card counterCard">
                <h2 class="h2">Product</h2>
                <h3 class="h4">+{{ $productCount }}</h3>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card counterCard">
                <h2 class="h2">Service</h2>
                <h3 class="h4">+{{ $serviceCount }}</h3>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card counterCard">
                <h2 class="h2">Order</h2>
                <h3 class="h4">+{{ $orderCount }}</h3>
            </div>
        </div>
    </div>
@endsection
