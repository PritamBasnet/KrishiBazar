@extends('backend.admin.layout.master')
@section('backend-content')
    @include('sweetalert::alert')

    <div class="row" style="background-color: white;">
        <div style="display: flex;justify-content:space-between;">
            <h3 class="h5" style="padding: 20px 10px;">View Our Latest Order</h3>
            <div class="mb-3" style="padding: 10px 20px;">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add new category
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add a new category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="input-group mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="name" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    <label for="">Image</label>
                                    <br>
                                    <div class="input-group mb-3">
                                        <input type="file" name="image" class="form-control" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="tableContainer">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $category = App\Models\Order::latest()->get();
                        
                        ?>
                        @isset($category)
                            @foreach ($category as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->product_name }}</td>
                                    <td>
                                        <img src="{{ asset($data->image) }}"
                                            class="backendImage" alt="">
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection
