@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>Login</h2>
        <form action="{{route('register')}}" method="post" >
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

            <div class="form-group" style="text-align: left">
                <a href="{{route('welcome')}}"  class="btn btn-default">Back to home</a>
                <div class="form-group">
            <div class="form-group" style="text-align: right">
                <button type="submit" class="btn btn-success">Login</button>
            <div class="form-group">
        </form>
    </div>
@endsection
