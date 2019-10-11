@extends('layout.app')
@section('content')
@include("includes/_navigation")
<div class="container">
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <img src="/" class="rounded-circle mt-4 mx-auto" alt="..." style="height:100px;width:100px;">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="avatar">{{ __('Avatar') }}</label>
                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                            <small class="text-danger">If you would like your avatar not be change, leave blank.</small>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">{{ __('Username') }}</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $profile->username }}" required autocomplete="username">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $profile->email }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="about">{{ __('About') }}</label>
                            <textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about">{{$profile->about}}</textarea>
                            @error('about')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6 class="font-weight-bold"><i class="fas fa-check-circle text-success"></i> Save changes</h6>
                            <p>Update all changes made to your profile</p>
                            <button type="submit" class="btn btn-block btn-success">Update</button>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm border-0 mt-3 bg-danger">
                    <div class="card-body">
                        <div class="form-group">
                            <h6 class="font-weight-bold text-light"><i class="fas fa-exclamation-triangle text-warning"></i> Warning</h6>
                            <p class="text-light">Before you continue pressing 'Delete account' please be aware this cannot be reversed. all your account details, posts etc will be wiped forever.</p>
                            <a href={{route('profile.destroy')}} class="btn btn-block btn-dark">Remove account</a>
                        </div>
                    </div>
                </div>
    </form>
</div>

@endsection
