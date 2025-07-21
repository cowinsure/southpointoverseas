@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: left">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($services as $service)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $service->content }}</td>
                <td>{{ $service->created_at->format('M d Y')}}</td>
                <td>{{ $service->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('service.edit',$service->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('service.destroy',$service->id)}}" method="post">
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
            <th>Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
