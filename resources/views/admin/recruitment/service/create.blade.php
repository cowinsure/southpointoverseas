@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Services</label>
                    <textarea class="form-control @error('content') is-invalid @enderror"
                              id="exampleFormControlTextarea1" rows="9" name="content"></textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
