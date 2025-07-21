@extends('admin.index')

@section('content')
    <div>
        <h5>Add clients location</h5>
        <hr style="background-color: red">
    </div>
    <div>
        <form action="{{ route('area.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="client_title">
                        <option></option>
                        @foreach($clients as $client)
                            <option>{{ $client->title }}</option>
                        @endforeach
                    </select>
                </div>

                @error('client_title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Location</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="area" class="@error('area') is-invalid @enderror">
                </div>

                @error('area')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
