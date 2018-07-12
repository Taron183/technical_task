@extends('layouts.default')
@section('content')
    @include('partials.messages')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    <form method="POST" action="{{route('reset')}}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" name="email"  required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                        <div class="form-group" style="text-align: left">
                            <a href="{{route('welcome')}}"  class="btn btn-default">Back to home</a>
                        <div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection