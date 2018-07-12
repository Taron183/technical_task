@extends('layouts.default')
@section('content')
    @include('profile.navbar')
    <main>
        <div class="container">
            <div class="row m-b-r m-t-3">
                <div class="col-md-2 offset-md-1">
                    @if(Auth::user()->image == null)
                        <img src="{{asset('images/default.jpg')}}" alt="" class="img-circle img-fluid">
                    @else
                        <img src="{{asset(Storage::url('avatar/'.Auth::user()->image))}}" alt=""
                             class="img-circle img-fluid">
                    @endif
                    {!! Form::open(['route' => 'avatar.photo','enctype'=>"multipart/form-data"]) !!}
                    <div class="form-group">
                        <input type="file" accept="image/x-png,image/gif,image/jpeg,image/jpg" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Edit photo</button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-9 p-t-2">
                    <h2 class="h2-responsive">{{Auth::user()->first_name}}</h2>
                    <p>{{Auth::user()->last_name}}</p>
                </div>
            </div>
            <h2 style="text-align: center">All Users</center></h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Verified</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->image)
                                <img src="{{asset(Storage::url('avatar/'.$user->image))}}" alt=""
                                     class="img-circle img-fluid" id="img-par">
                            @else
                                <img src="{{asset('images/default.jpg')}}" alt="" class="img-circle img-fluid"
                                     id="img-par">
                            @endif
                        </td>
                        <td>{!! $user->verified == 1 ? '<i class="fa  fa-check-circle-o"></i>' : '<i class="fa  fa-circle"></i>' !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection

