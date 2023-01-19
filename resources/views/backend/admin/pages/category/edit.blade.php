@extends('backend.admin.layout.master')
@section('backend-content')
    @include('sweetalert::alert')

    <div class="row" style="background-color: white;">
        <div style="display: flex;justify-content:space-between;">
            <h3 class="h5" style="padding: 20px 10px;">Edit Category</h3>
        </div>
        <div class="tableContainer">
            <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="name" aria-label="Username"
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
@endsection
