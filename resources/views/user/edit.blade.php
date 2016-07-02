@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-6">
            {!! Form::model($user,['file'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Name',['class'=>'label-control']) !!}
                {!! Form::text('name',null,['class'=>'form-control disabled','readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('phone','Phone',['class'=>'label-control']) !!}
                {!! Form::text('phone',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('dob','Date of Birth',['class'=>'label-control']) !!}
                {!! Form::text('dob',null,['class'=>'form-control disabled','readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('department','Department',['class'=>'label-control']) !!}
                {!! Form::text('department',$user->department->department_name,['class'=>'form-control disabled','readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('roll_no','Roll No',['class'=>'label-control']) !!}
                {!! Form::text('roll_no',null,['class'=>'form-control disabled','readonly']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image','Image',['class'=>'label-control']) !!}
                {!! Form::file('image',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection