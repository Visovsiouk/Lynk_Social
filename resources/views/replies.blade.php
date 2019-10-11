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
          <div class="card border-0">
                <div class="card-body">
                <div class="card mb-2 border-0">
                <div class="card-body">
                    <div class="media align-items-center">
                        <img src="{{ Auth::user()->avatar }}" class="img-fluid center-block rounded-circle mr-2" style="height:90px;width:90px;">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h6 class="mt-0 text-primary font-weight-bold mt-2">{{ Auth::user()->username }}</h6>
                                </div>
                                <div class="col-sm-4">
                                    <div class="btn-group float-right mb-1">
                                        <button class="btn btn-post btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Edit post</a>
                                            <a class="dropdown-item" href="#">Delete post</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $post->body }}</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <small>Posted 4 days ago</small>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-post btn-sm float-right">
                                        <i class="far fa-heart text-danger pr-2"></i><span class="badge badge-light pr-2">300</span>
                                        <span class="sr-only">unread messages</span>
                                    </button>
                                    <button type="button" class="btn btn-post btn-sm float-right mr-2">
                                        <i class="far fa-comment-alt pr-2"></i> <span class="badge badge-light">100</span>
                                        <span class="sr-only">unread messages</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <hr>
                </div>
            </div>
            <!-- COMMENT CARD FOR WRITING YOUR POST -->
            <div class="card border-0 mt-3 mb-3">
                <div class="card-body">
                    <div class="form-group">
                     <form action="{{ route('comment') }}" method="post">
                     @csrf
                        <textarea class="form-control comment-post" id="exampleFormControlTextarea1" rows="2" placeholder="Comment" name="comment"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input class="btn btn-home btn-sm float-right mt-2" type="submit" value="Comment">
                    </form>
                    </div>
                </div>
            </div>
            <!-- COMMENT CARD FOR WRITING YOUR POST -->

            <div class="card border-0">
                <div class="card-body">
                    <b>Replies</b>
                    <hr>
                    @include("includes/_repliescard")
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
<script>
    String.prototype.trim = function() {
       return this.replace(/^\s+|\s+$/g,"");
    }
   onload = ()=>{
       
       const commentBtn      = document.querySelector('input[value="Comment"]');
       const commentTextarea = document.querySelector('.comment-post');
       // set comment btn to disable on page load
       commentBtn.setAttribute('disabled','');
       /// enable comment btn on textarea key up 
       commentTextarea.onkeyup = () =>{
           if(commentTextarea.value.trim() !='') {
               commentBtn.removeAttribute('disabled');
           } else {
            commentBtn.setAttribute('disabled','');
           }
       }
   }

</script>
@endsection
