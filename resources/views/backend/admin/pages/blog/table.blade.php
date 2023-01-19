@extends('backend.admin.layout.master')
@section('backend-content')
    @include('sweetalert::alert')

    <div class="row" style="background-color: white;">
        <div style="display: flex;justify-content:space-between;">
            <h3 class="h5" style="padding: 20px 10px;">Blog Table</h3>
        </div>
        <div class="tableContainer">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $blog = App\Models\Blog::all();
                        
                        ?>
                        @isset($blog)
                            @foreach ($blog as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <img src="{{ asset($data->image) }}" alt="" class="backendImage">
                                    </td>
                                    <td>
                                        <a href="{{ route('blog.delete',$data->id) }}" class="btn btn-danger">Delete</a>
                                        <a href="{{ route('blog.edit',$data->id) }}" class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection
