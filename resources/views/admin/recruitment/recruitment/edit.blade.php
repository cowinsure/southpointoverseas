@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('recruitment.update',$recruitment->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <div class="form-group">
                <label for="exampleInputEmail1">Enter title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="" name="title" class="@error('title') is-invalid @enderror" value="{{ $recruitment->title }}">
                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Enter content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="exampleFormControlTextarea1" rows="10" name="content">{{ $recruitment->content }}</textarea>
            </div>

            @error('content')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
@endsection
