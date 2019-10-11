<!-- CARD FOR DISPLAYING POST -->
<div class="card mb-5 mt-5 border-0">
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
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum.</p>
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



<div class="card mb-5 border-0">
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
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum.</p>
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



<div class="card mb-5 border-0">
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
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum.</p>
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
<!-- CARD FOR DISPLAYING DISPLAY -->
