@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Images</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($infrastructure_slider as $slider)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->content }}</td>
                <td><img src="storage/{{ $slider->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $slider->created_at->format('M d Y')}}</td>
                <td>{{ $slider->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('infrastructure-images.edit',$slider->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('infrastructure-images.destroy',$slider->id)}}" method="post">
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
            <th>Images</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
