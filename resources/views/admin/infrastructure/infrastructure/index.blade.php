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

        @foreach($infrastructures as $infrastructure)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $infrastructure->title }}</td>
                <td>{{ $infrastructure->content }}</td>
                <td>{{ $infrastructure->created_at->format('M d Y') }}</td>
                <td>{{ $infrastructure->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('infrastructure.edit',$infrastructure->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('infrastructure.destroy',$infrastructure->id)}}" method="post">
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
