<!-- CARD FOR DISPLAYING POST -->
@forelse($posts as $post)
<div class="card mb-2 border-0">
    <div class="card-body">
        <div class="media align-items-center">
            <img src="{{ $post->author->avatar}}" class="img-fluid center-block rounded-circle mr-2" style="height:90px;width:90px;">
            <div class="media-body">
                <div class="row">
                    <div class="col-sm-8">
                        <h6 class="mt-0 text-primary font-weight-bold mt-2">{{ $post->author->username }}</h6>
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
                        <small>{{ $post->created_at->diffForHumans() }}</small>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-post btn-sm float-right" data-toggle="modal" data-target="#flag">
                            <i class="fas fa-flag pr-2"></i><span class="badge badge-light pr-2">Report</span>
                            <span class="sr-only">Report</span>
                        </button>
                        <button type="button" class="btn btn-post btn-sm float-right">
                            <i class="far fa-heart text-danger pr-2"></i><span class="badge badge-light pr-2">300</span>
                            <span class="sr-only">unread messages</span>
                        </button>
                        <a href="{{ route('replies',['post_id'=>$post->id]) }}" class="btn btn-post btn-sm float-right mr-2">
                            <i class="far fa-comment-alt pr-2"></i> <span class="badge badge-light">100</span>
                            <span class="sr-only">unread messages</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CARD FOR DISPLAYING DISPLAY -->
@empty
<p>No Posts Yet</p>
@endforelse

<div class="modal fade" id="flag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-triangle text-danger"></i> Report post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="font-weight-bold">Report post or user</h6>
                <p>If you believe there is something wrong please use this reporting form to make us aware so we can take action as soon as possible.</p>
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                    <label class="form-check-label" for="exampleRadios1">
                        Spamming / Fake user
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Pornographic/ worrying images
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option3">
                    <label class="form-check-label" for="exampleRadios1">
                        Hate speech / abuse
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option4">
                    <label class="form-check-label" for="exampleRadios2">
                        User Welfare / cause of concern
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option5">
                    <label class="form-check-label" for="exampleRadios1">
                        Other ( please explain below)
                    </label>
                </div>
                <div class="form-group mt-2">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <h6 class="font-weight-bold">Thank you</h6>
                <p>All reports will be checked and dealt with as soon as possible</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Report now</button>
            </div>
        </div>
    </div>
</div>
