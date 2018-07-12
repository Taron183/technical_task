@extends('layouts.default')
@section('style')
    <style>
        #blah_back {
            background-size: cover;
            background-position: center;
        }

        .upload {
            width: 200px;
            height: 200px;
        }

        #image1 {
            display: none;
        }

        .imageLabel {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }


    </style>
@endsection
@section('content')
    @include('profile.navbar')
    @include('partials.messages')
    <form method="POST" action="{{route('add.photos')}}" enctype="multipart/form-data" id="form_lang_tab">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-xs-2">
                <div class="upload" id="blah_back"
                     style="background-image: url('{{asset('images/add1.png')}}')">
                    <label for="image1" class="imageLabel"></label>
                </div>
                <input type="file" id="image1"
                       accept="image/x-png,image/gif,image/jpeg,image/jpg"
                       name="image" onchange="readURLSetBackground(this)"
                       class="file_size">
                @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </form>

    @foreach($items->images as  $item)
        <div class="col-sm-1 ">
            <div class="view overlay hm-black-light">
                <img src="{{asset(Storage::url('photos/'.$item->image))}}" class="img-fluid " alt="">

            </div>
        </div>
    @endforeach
@endsection
@section('script')
    <script src='{{asset('js/image_show.js')}}'></script>
@endsection