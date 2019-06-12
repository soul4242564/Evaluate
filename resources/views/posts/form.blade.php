<!-- dd($request->input()); -->
<div class="row">
    <div class="col-xs-12">
        <div class="form-gruop">
            <strong>Name :</strong>
            {!! form::text('name', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-gruop">
                <strong>Time management :</strong>
                {!! form::text('timemanagement', null, ['placeholder'=>'Time management','class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-gruop">
                <strong>Quality of work :</strong>
                {!! form::text('quality', null, ['placeholder'=>'Quality of work','class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-gruop">
            <strong>Creativity :</strong>
            {!! form::text('creativity', null, ['placeholder'=>'creativity','class'=>'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-gruop">
                <strong>Team work :</strong>
                {!! form::text('teamwork', null, ['placeholder'=>'teamwork','class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-gruop">
                <strong>Discipline :</strong>
                {!! form::text('discipline', null, ['placeholder'=>'discipline of work','class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <p>
    <div class="col-xs-12">
        <a class="btn btn-xs btn-success" href="{{ route('posts.index')}}">Back</a>
        <button type="submit" class="btn btn-xs btn-primary">Submit</button>
    </div>
</div>
