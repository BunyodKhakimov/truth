@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        @if (session('status'))
        <div class="col-md-8 py-3">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
        @endif

        <div class="col-md-8 py-3">
            <div class="card">
                <div class="card-header">{{ __('Admin Panel') }}</div>

                <div class="card-body">
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="col-md-8 py-3">
            <div class="card">
                <div class="card-header">{{ __('Upload Image') }}</div>

                <div class="card-body">
                    <form action="{{route('image')}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf()
                        <div class="form-group py-2">
                            <label for="image_title">Title</label>
                            <input type="text" class="form-control w-50" name="image_title" id="image_title" placeholder="e.g. Flowers">
                            @error('image_title')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group py-2 pb-3">
                            <label for="image_file">File</label><br>
                            <input type="file" class="form-control w-50" name="image_file" id="image_file">
                            @error('image_file')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
