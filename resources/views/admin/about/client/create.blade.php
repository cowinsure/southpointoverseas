@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter client list Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title" class="@error('title') is-invalid @enderror">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="inputState">Select status state</label>
                    <select id="inputState" class="form-control" name="status">
                        <option></option>
                        <option>active</option>
                        <option>hold</option>
                        <option>inactive</option>
                    </select>
                </div>

                @error('status')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter top value : </label>
                    <input type="number" name="top">
                </div>

                @error('top')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter left value : </label>
                    <input type="number" name="left">
                </div>

                @error('left')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
@endsection
