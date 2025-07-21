@extends('admin.index')

@section('content')
    <h3>About Info</h3>

    @if(session('update'))
        <div style="background-color: greenyellow;">
            <p style="padding: 2px; color: black">Post updated successfully</p>
        </div>
    @elseif(session('delete'))
        <div style="background-color: red;">
            <p style="padding: 2px; color: black">Post updated successfully</p>
        </div>
    @endif

    <table id="example" class="display" style="text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($about_info as $about)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $about->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($about->content,30)  }}</td>
                <td><img src="storage/{{ $about->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $about->created_at->format('M d Y') }}</td>
                <td>{{ $about->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('about.edit',$about->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('about.destroy',$about->id)}}" method="post">
                        @method('delete')
                        {{csrf_field()}}
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
