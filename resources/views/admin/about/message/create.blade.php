@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="" name="name" class="@error('name') is-invalid @enderror">
            </div>

            @error('name')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleInputEmail1">Enter director's position</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="" name="position" class="@error('position') is-invalid @enderror">
            </div>

            @error('position')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Enter director's image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                       id="exampleFormControlFile1" name="image">
            </div>

            @error('image')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter director's message</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1"
                          rows="9" name="message"></textarea>
            </div>

            @error('message')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
@endsection
