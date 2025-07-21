@extends('admin.index')

@section('content')
    <table id="example" class="display" style="width:100%; text-align: center">
        <thead>
        <tr>
            <th>Serial</th>
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
        @foreach($trade_page_images as $trade)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $trade->content }}</td>
                <td><img src="storage/{{ $trade->image }}" alt="" style="width: 80px; height: 80px"></td>
                <td>{{ $trade->created_at->format('M d Y')}}</td>
                <td>{{ $trade->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('trades.edit',$trade->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('trades.destroy',$trade->id)}}" method="post">
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
