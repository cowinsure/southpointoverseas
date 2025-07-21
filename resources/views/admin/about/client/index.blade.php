@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Status</th>
            <th>Top value</th>
            <th>Left value</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>

        @foreach($client_list as $client)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $client->title }}</td>
                <td>{{ $client->status }}</td>
                <td>{{ $client->top }}</td>
                <td>{{ $client->left }}</td>
                <td>{{ $client->created_at->format('M d Y') }}</td>
                <td>{{ $client->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('client.edit',$client->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('client.destroy',$client->id)}}" method="post">
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
            <th>Status</th>
            <th>Top value</th>
            <th>Left value</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
