<!-- CARD FOR DISPLAYING POST -->
                    <div class="card mb-2 border-0">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <img src="{{ Auth::user()->avatar }}" class="img-fluid center-block rounded-circle mr-2" style="height:90px;width:90px;">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h6 class="mt-0 text-dark font-weight-bold">{{ Auth::user()->username }}</h6>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
</div>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum.</p>
                                    <div class="row">
                                <div class="col-sm-6">
                                    <small>Posted 4 days ago</small>
                                </div>
                                <div class="col-sm-6">
                                    <i class="far fa-comment-alt float-right"> 250</i>
                                    <i class="far fa-grin float-right mr-3"> 250</i>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD FOR DISPLAYING DISPLAY -->