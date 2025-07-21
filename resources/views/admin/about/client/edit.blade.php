@extends('admin.index')

@section('content')
    <div>
        <form action="{{ route('client.update',$client->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <div class="form-group">
                <label for="exampleInputEmail1">Enter client list Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="" name="title" class="@error('title') is-invalid @enderror" value="{{$client->title}}">
            </div>

            @error('title')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="inputState">Select status state</label>
                <select id="inputState" class="form-control" name="status">
                    <option></option>
                    <option @if($client->status == 'active') selected @endif>active</option>
                    <option @if($client->status == 'hold') selected @endif>hold</option>
                    <option @if($client->status == 'inactive') selected @endif>inactive</option>
                </select>
            </div>

            @error('status')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter top value : </label>
                <input type="number" name="top" value="{{ $client->top }}">
            </div>

            @error('top')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter left value : </label>
                <input type="number" name="left" value="{{ $client->left }}">
            </div>

            @error('left')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
@endsection
