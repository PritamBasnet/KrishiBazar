@extends('backend.admin.layout.master')
@section('backend-content')
    @include('sweetalert::alert')

    <div class="row" style="background-color: white;">
        <div style="display: flex;justify-content:space-between;">
            <h3 class="h5" style="padding: 20px 10px;">Edit Blog</h3>
        </div>
        <div class="tableContainer">
            <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" name="name" value="{{ $blog->name }}" class="form-control" placeholder="name" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <label for="">Image</label>
                    <br>
                    <div class="input-group mb-3">
                        <input type="file" name="image" class="form-control" placeholder="" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <textarea id="summernote" name="desc">
                        {{ $blog->desc }}
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
