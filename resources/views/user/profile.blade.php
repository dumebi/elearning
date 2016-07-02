@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-3">
            <div class="col-lg-12">
                <img src="{!! url('images/'.substr($auth->name,0,1)).'.jpg' !!}" alt="{!! $auth->name !!}"
                     class="img-responsive img-rounded">
            </div>
            <div class="col-lg-12" style="margin-top: 5px">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Basic Information</h3>
                    </div>
                    <div class="panel-body">

                        <p class="text-success">
                            <b>Department Name:</b> {!! $auth->department->department_name !!}
                        </p>

                        <p class="text-info"><b>Phone No:</b> {!! $auth->phone !!}</p>

                        <p class="text-info"><b>Roll No:</b> {!! $auth->roll_no !!}</p>

                        <p class="text-info"><b>Date of Birth:</b>
                            {!! \Carbon\Carbon::createFromFormat('Y-m-d',$auth->dob)->format('d F,Y') !!}
                        </p>
                    </div>
                    <div class="panel-footer">
                        <a href="{!! url('/edit') !!}" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-edit"></span> Edit </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                @foreach($auth->subject as $subject)
                    <div class="col-lg-4">
                        <div class="list-group">
                            <div class="list-group-item active">
                                {!! $subject->subject_name !!}
                            </div>
                            @foreach($subject->books->where('department_id',$auth->department_id) as $book)
                                <div class="list-group-item">
                                    <blockquote>{!! $book->book_name !!}
                                        <small>Publisher : {!! $book->publisher !!}</small>
                                    </blockquote>
                                    <div>
                                        <p class="alert alert-info">Author:{!! $book->author  !!}</p>
                                    </div>
                                    <hr>
                                    <div>
                                        <a href="#" class="btn btn-primary"><span
                                                    class="glyphicon glyphicon-download-alt"></span> Download</a>
                                        <a href="#" class="btn btn-success"><span
                                                    class="glyphicon glyphicon-book"></span> Read it</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection