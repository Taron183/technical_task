@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Login</h2></div>
            <div class="panel-body">
                @if($messages = Session::get('error'))
                    <div class="alert alert-danger  alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$messages}}</strong>
                    </div>

                @endif
                {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter email']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Enter password' ) ) }}
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group" style="text-align: center">
                        <a class="" href="{{route('reset.show')}}">
                            Forgot Your Password?
                        </a>
                    </div>
                    <div class="form-group" style="text-align: left">
                        <a href="{{route('welcome')}}"  class="btn btn-default">Back to home</a>
                    </div>
                    <div class="form-group" style="text-align: right">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
