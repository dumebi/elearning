@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-lg-3">
            <div class="col-lg-12">
                <img src="{!! url('images/'.substr($auth->name,0,1)).'.jpg' !!}" alt="{!! $auth->name !!}"
                     class="img-responsive img-rounded">
            </div>
            <div class="col-lg-12">
            </div>
        </div>
        <iframe class="col-lg-8" src="http://localhost/elearning/public/pdf/SarnodeepAgarwalla.pdf">

        </iframe>
    </div>
@endsection