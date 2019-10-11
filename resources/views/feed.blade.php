@extends('layout.app')
@section('content')
@include("includes/_navigation")
<style>
    body {
        background-color: #edf2f7;
    }
</style>
<div class="alert alert-message m-0 border-0" role="alert">

    <h6 class="text-center text-light pt-2">Help make Lynk, Discover how you can help build <u style="color:#4FD1C5;">here on github</u></h6>

</div>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body"></div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- COMMENT CARD FOR WRITING YOUR POST -->
            <div class="card border-0 mb-3">
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control comment-post" id="exampleFormControlTextarea1" rows="2" placeholder="Once upon a time.."></textarea>
                        <input class="btn btn-home btn-sm float-right mt-2" type="submit" value="Post">
                    </div>
                </div>
            </div>
            <!-- COMMENT CARD FOR WRITING YOUR POST -->
            <div class="card border-0">
                <div class="card-body">
                    @include("includes/_postcard")
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            @if (Auth::guest())
            <div class="card border-0 shadow-sm mb-2">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="password">{{ __('E-Mail Address') }}</label>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-home btn-block">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link mt-3 btn-sm" href="/register">
                                Not yet registered?
                            </a>

                        </div>
                    </form>
                </div>
            </div>
            @endif
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="font-weight-bold">#trending</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cras justo odio
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-primary badge-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
