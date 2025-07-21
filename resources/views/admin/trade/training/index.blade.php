@extends('admin.index')

@section('content')
    <h2>Training Activities</h2>

    @if(session('update'))
        <div style="background-color: greenyellow;">
            <p style="padding: 2px; color: black">Post updated successfully</p>
        </div>
    @elseif(session('delete'))
        <div style="background-color: red;">
            <p style="padding: 2px; color: black">Post updated successfully</p>
        </div>
    @endif

    <table id="example" class="display" style="text-align: center">
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

        @foreach($training_activities as $training)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $training->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($training->content,20)  }}</td>
                <td>{{ $training->created_at->format('M d Y') }}</td>
                <td>{{ $training->updated_at->format('M d Y') }}</td>
                <td>
                    <a href="{{ route('trainings.edit',$training->id) }}">
                        <button type="button" class="btn btn-outline-primary">Update</button>
                    </a>
                </td>
                <td>

                    <form action="{{route('trainings.destroy',$training->id)}}" method="post">
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
