@extends('posts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12" style="text-align:center;">
            <h3>Evaluate the performance of the employees</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-right">
            <div class="pull-right">
            <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">search</button>
                </span><p>
            </div>
            </form>
                <a class="btn ben-xs btn-success" href="{{ route('posts.create') }}">Create New Posts</a><p>
            </div>
        </div>
    </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
         @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Time Management</th>
                <th>Quality</th>
                <th>Creativity</th>
                <th>Team work</th>
                <th>Discipline</th>
                <th width="200px"><A>Actions</A></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $i => $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->timemanagement }}</td>
                <td>{{ $post->quality }}</td>
                <td>{{ $post->creativity }}</td>
                <td>{{ $post->teamwork }}</td>
                <td>{{ $post->discipline }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href ="{{ route('posts.show', $post->id) }}">Show</a>
                    <a class="btn btn-xs btn-primary" href ="{{ route('posts.edit', $post->id) }}">Edit</a>

                    {!! Form::open(['method' => 'delete', 'route'=>['posts.destroy', $post->id], 'style'=> 'display:inline']) !!}
                        {!! Form::submit('delete',['class'=> 'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p style="text-align:center;"><a class="btn btn-x btn-danger" href="{{ route('logout')}}">Log out</a></p>
@endsection
