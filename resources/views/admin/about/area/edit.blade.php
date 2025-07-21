@extends('admin.index')

@section('content')
    <div>
        <h5>Edit clients location</h5>
        <hr style="background-color: red">
    </div>
    <div>
        <form action="{{ route('area.update',$area->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Edit Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="area" class="@error('area') is-invalid @enderror" value="{{$area->area}}">
                </div>

                @error('area')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
