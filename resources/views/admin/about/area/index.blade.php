@extends('admin.index')

@section('content')
    <div>
        <h5>View clients location</h5>
        <hr style="background-color: red">
    </div>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Country</th>
            <th>Location</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>

        @foreach($areas as $area)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $area->client->title ?? "NOT RELATED" }}</td>
                <td>{{ $area->area }}</td>
                <td>{{ $area->created_at->format('M d Y') }}</td>
                <td>{{ $area->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('area.edit',$area->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('area.destroy',$area->id)}}" method="post">
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
            <th>Country</th>
            <th>Location</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
