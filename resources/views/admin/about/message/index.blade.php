@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Images</th>
            <th>Position</th>
            <th>Message</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($directors_messages as $message)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $message->name }}</td>
                <td><img src="storage/{{ $message->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $message->position }}</td>
                <td>{{ \Illuminate\Support\Str::limit ($message->message,20) }}</td>
                <td>{{ $message->created_at->format('M d Y')}}</td>
                <td>{{ $message->updated_at->format('M d Y')}}</td>
                <td>
                    <a href="{{ route('message.edit',$message->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('message.destroy',$message->id)}}" method="post">
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
            <th>Name</th>
            <th>Images</th>
            <th>Position</th>
            <th>Message</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
