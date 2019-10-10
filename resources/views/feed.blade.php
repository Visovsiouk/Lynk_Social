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
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="font-weight-bold">Whats happening</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
