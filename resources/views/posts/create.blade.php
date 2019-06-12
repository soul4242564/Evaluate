@extends('posts.master')
@section('content')
<div class="row">
    <div class="col-la-12 text-center">
          <h3>Add New Evaluate </h3>
        </div>
</div>
    @if(count($errors) > 0 )
        <div class="alert alert-danger">.
            <strong>Whooops!!</strong>There were some problems you input.<br>
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{!! Form::open([ 'route' => 'posts.store','method' => 'POST']) !!}
 @include('posts.form')
{!! Form::close() !!}
