@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($footers as $footer)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $footer->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($footer->address,20)  }}</td>
                <td>{{ $footer->tel }}</td>
                <td>{{ $footer->email }}</td>
                <td>{{ $footer->created_at->format('M d Y')}}</td>
                <td>{{ $footer->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('footer.edit',$footer->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>
                    <form action="{{route('footer.destroy',$footer->id)}}" method="post">
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
            <th>Address</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </tfoot>
    </table>
@endsection
