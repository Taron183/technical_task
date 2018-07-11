@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Confirmed</div>
                <div class="panel-body">
                    Congratulations  {{$user->first_name}}!!!
                    Your Email is successfully verified. Click here to <a href="{{route('login.show')}}">login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection