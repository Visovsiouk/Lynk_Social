<nav class="navbar navbar-expand-lg navbar-light">
    <img class="navbar-brand" src="/assets/img/lynk_icon.svg" alt="logo" style="height:30px;width:30px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @if (Auth::guest())
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/register">Join free</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-home btn-sm mt-1" href="/login" role="button">Log in</a>
            </li>
        </ul>
        @else
        <ul class="navbar-nav ml-auto">
            <li>
            <li class="nav-link">
                <div id="notifications" class="dropdown">
                    <button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell mr-2"></i><span class="badge badge-pill badge-danger notification-counter">{{ $user->unreadNotifications->count() }}</span>
                    </button>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-toolbar">
                            <p class="dropdown-toolbar-title">Unread notifications ({{$user->unreadNotifications->count()}})</p>
                            <div>
                                <a href="#" id="read-notifications" onclick="markAllNotificationsAsRead(); return false;">Mark all as read</a>
                            </div>
                        </div>
                        <div class="notifications-list"></div>
                    </div>
                </div>
            </li>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{\auth()->user()->avatar}}" class="img-fluid center-block rounded-circle" style="height:40px;width:40px;">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="{{route('profile')}}">My profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Log out Lynk</a>
                </div>
            </li>
        </ul>
    </div>
    @endif
</nav>
