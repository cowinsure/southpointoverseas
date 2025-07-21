@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($recruitments as $recruitment)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $recruitment->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($recruitment->content,15) }}</td>
                <td>{{ $recruitment->created_at->format('M d Y')}}</td>
                <td>{{ $recruitment->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('recruitment.edit',$recruitment->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('recruitment.destroy',$recruitment->id)}}" method="post">
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
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
