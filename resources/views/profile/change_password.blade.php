@extends('layouts.default')
@section('content')
    @include('profile.navbar')
    @include('partials.messages')
    <div class="container">
        <div class="panel panel-default" style="margin-top:50px;">
            <div class="panel-heading"><h2>Change Password</h2></div>
            <div class="panel-body">
                {!! Form::open(['route' => 'change.password', 'method' => 'post']) !!}
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Enter password' ) ) }}
                    @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('confirm_password', 'Confirm password:') !!}
                    {{ Form::password('confirm_password', array('class'=>'form-control', 'placeholder'=>'Enter Confirm password' ) ) }}
                    @if ($errors->has('confirm_password'))
                        <span class="help-block"><strong>{{ $errors->first('confirm_password') }}</strong></span>
                    @endif
                </div>
                <div class="form-group" style="text-align: right">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection