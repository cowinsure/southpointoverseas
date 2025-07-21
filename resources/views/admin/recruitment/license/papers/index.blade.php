@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Image</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($papers as $paper)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $paper->document->title ?? 'NO AVAILABLE TITLES' }}</td>
                <td>{{ $paper->content }}</td>
                <td><img src="storage/{{ $paper->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $paper->created_at->format('M d Y')}}</td>
                <td>{{ $paper->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('paper.edit',$paper->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('paper.destroy',$paper->id)}}" method="post">
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
            <th>Image</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
