@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('paper.update',$paper->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter image of documentation ( if required )</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="content" class="@error('content') is-invalid @enderror" value="{{ $paper->content }}">
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
