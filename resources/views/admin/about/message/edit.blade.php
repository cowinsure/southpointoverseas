@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('message.update',$message->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Edit directors Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="" name="name" class="@error('name') is-invalid @enderror" value="{{$message->name}}">
            </div>

            @error('name')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleInputEmail1">Edit director's position</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="" name="position" class="@error('position') is-invalid @enderror" value="{{$message->position}}">
            </div>

            @error('position')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Edit director's image (if required)</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                       id="exampleFormControlFile1" name="image">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter director's message</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1"
                          rows="9" name="message">{{$message->message}}</textarea>
            </div>

            @error('message')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
@endsection
