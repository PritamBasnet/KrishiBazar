@extends('backend.admin.layout.master')
@section('backend-content')
    @include('sweetalert::alert')

    <div class="row" style="background-color: white;">
        <div style="display: flex;justify-content:space-between;">
            <h3 class="h5" style="padding: 20px 10px;">Add Product</h3>
        </div>
        <div class="tableContainer">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="name" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="price" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="discount" value="{{ old('discount') }}" class="form-control" placeholder="discountpriceRs:-" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <br>
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <option selected value="">Choose Category</option>
                        <?php 
                            $category = App\Models\Category::all();
                        ?>
                        @isset($category)
                            @foreach ($category as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                            @endforeach
                        @endisset
                      </select>
                    <br>
                      <select class="form-select" name="agricultureunit" aria-label="Default select example">
                        <option selected value="">Choose Agriculture Unit</option>
                        <?php
                            $agricultureunit = App\Models\agricultureunit::all();
                        ?>
                        @isset($agricultureunit)
                            @foreach ($agricultureunit as $data)
                                <option value="{{ $data->name }}">{{ $data->name }}</option>
                            @endforeach
                        @endisset
                      </select>
                    <br>
                      <select class="form-select"  name="is_fertilizer" aria-label="Default select example">
                        <option selected value="">Is Fertilizer</option>
                        <option value="1">True</option>
                        <option value="0">False</option>
                      </select>
                    <br>
                    <label for="">Image</label>
                    <br>
                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" placeholder="" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <label for="">More Image</label>
                    <br>
                    <div class="input-group mb-3">
                        <input type="file" name="images[]" multiple class="form-control" placeholder="" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>

                    <textarea id="summernote" name="desc">
                        {{ old('desc') }}
                    </textarea>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
          placeholder: 'Description',
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
      </script>
@endsection
