@extends('layouts.default')
@section('style')
    <style>
        .help-block{
            color: red;
        }
    </style>
@endsection
@section('content')
    @include('partials.messages')
    <div class="container">
        <h2>Registration   user</h2>
        <form action="{{route('register')}}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first_name">First name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
                @if ($errors->has('first_name'))
                    <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                <label for="last_name">Last name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
                @if ($errors->has('last_name'))
                    <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">
                @if ($errors->has('confirm_password'))
                    <span class="help-block"><strong>{{ $errors->first('confirm_password') }}</strong></span>
                @endif
            </div>
            <div class="form-group" style="text-align: left">
                <a href="{{route('welcome')}}"  class="btn btn-default">Back to home</a>
            <div class="form-group">
            <div class="form-group" style="text-align: right">
                <button type="submit" class="btn btn-success">REGISTER</button>
            <div class="form-group">
        </form>
    </div>
@endsection
