@extends('backend.admin.layout.master')
@section('backend-content')
    @include('sweetalert::alert')

    <div class="row" style="background-color: white;">
        <div style="display: flex;justify-content:space-between;">
            <h3 class="h5" style="padding: 20px 10px;">Product Table</h3>
        </div>
        <div class="tableContainer">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (Auth::user()->u_type == 'a')
                    <?php 
                        $service = App\Models\Product::all();
                        
                        ?>
                        
                    @else
                        <?php 
                        $service = App\Models\Product::where('auth_id','=',Auth::user()->id)->get();
                        
                        ?>
                    @endif
                        @isset($service)
                            @foreach ($service as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->category->name }}</td>
                                    <td>
                                        <img src="{{ asset($data->image) }}" alt="" class="backendImage">
                                    </td>
                                    <td>
                                        {{ $data->price }}
                                        per
                                        {{ $data->agricultureunit }}
                                    </td>
                                    <td>
                                        {{ $data->userToProduct->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('product.delete',$data->id) }}" class="btn btn-danger">Delete</a>
                                        <a href="{{ route('product.edit',$data->id) }}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection
