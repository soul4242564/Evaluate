@extends('posts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 text-left">
            <h3>Show Evaluate</h3>
            <a class="btn btn-xs btn-primary" href="{{ route('posts.index')}}">back</a>
        </div>
    </div>
    <br>
<div class="row">
    <div class="col-lg-12">
        <div class="from-group">
            <Strong>Name :</Strong>
            {{ $post->name }}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="from-group">
            <Strong>Time management :</Strong>
            {{ $post->timemanagement }}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="from-group">
            <Strong>Quality :</Strong>
            {{ $post->quality }}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="from-group">
            <Strong>Creativity :</Strong>
            {{ $post->creativity }}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="from-group">
            <Strong>Team work :</Strong>
            {{ $post->teamwork }}
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class="from-group">
            <Strong>Discipline :</Strong>
            {{ $post->discipline }}
        </div>
    </div>
</div>




@endsection
