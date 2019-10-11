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
                        <div class="row">
                            <div class="col-sm-6 pt-3">
                                <i class="far fa-smile mr-2"></i>
                                <i class="far fa-images"></i>
                            </div>
                            <div class="col-sm-6">
                                <input class="btn btn-home btn-sm float-right mt-2" type="submit" value="Post">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMMENT CARD FOR WRITING YOUR POST -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item mr-2">
                    <a class="btn btn-light btn-sm" id="pills-feed-tab" data-toggle="pill" href="#pills-feed" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-smile text-info"></i> My Feed</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="btn btn-light btn-sm" id="pills-trending-tab" data-toggle="pill" href="#pills-trending" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-chart-line text-primary"></i> Trending</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light btn-sm" id="pills-popular-tab" data-toggle="pill" href="#pills-popular" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fas fa-fire text-warning"></i> Popular</a>
                </li>
            </ul>
            <div class="card border-0">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-feed" role="tabpanel" aria-labelledby="pills-feed-tab">
                            @include("includes/_postcard")
                        </div>
                        <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                            Trending posts
                        </div>
                        <div class="tab-pane fade" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                            Popular
                        </div>
                    </div>
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
                            <span class="badge badge-dark badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Dapibus ac facilisis in
                            <span class="badge badge-dark badge-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Morbi leo risus
                            <span class="badge badge-dark badge-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
