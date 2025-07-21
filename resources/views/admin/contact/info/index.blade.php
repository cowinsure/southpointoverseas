@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>map</th>
            <th>place</th>
            <th>address</th>
            <th>tel</th>
            <th>email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $contact->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($contact->map,10)  }}</td>
                <td>{{ $contact->place }}</td>
                <td>{{ \Illuminate\Support\Str::limit($contact->address,15)  }}</td>
                <td>{{  $contact->tel }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->created_at->format('M d Y')}}</td>
                <td>{{ $contact->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('contact.edit',$contact->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('contact.destroy',$contact->id)}}" method="post">
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
            <th>map</th>
            <th>place</th>
            <th>address</th>
            <th>tel</th>
            <th>email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
