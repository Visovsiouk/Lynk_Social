<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <title>Lynk - Social</title>
    @yield('css')
</head>

<body>
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/bootstrap.js') }}"></script>

    {{-- Notification handling scripts. Should be moved to relevant section when created --}}
    <script>
		window.pusher_key = '{{ config("broadcasting.connections.pusher.key") }}';
	</script>

    @if (Auth::check())
        <script>
            Echo.private('App.User.{{$user->id}}')
                .notification((notification) => {
                    updateNotificatonsCountTick(+1);
                });
        </script>
    @endif

    @yield('js')
    <script>
        function updateNotificatonsCount($newValue) {
            $('#notifications .notification-counter').text(`${$newValue}`);
        }

        function updateNotificatonsCountTick($newValue) {
            var $count = $('#notifications .notification-counter').text();

            var $newCount = parseInt($count) + parseInt($newValue);

            if ($newCount < 0) {
                $newCount = 0;
            }

            updateNotificatonsCount($newCount)
        }

        function markAllNotificationsAsRead() {
            axios.post('{{ route('notifications.readAll') }}')
                .then(function (response) {
                    $('#notifications .dropdown-menu li.notification').addClass('read');

                    updateNotificatonsCount(0);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }

        $('#notifications').on('show.bs.dropdown', function() {

            $('#notifications .dropdown-menu .notifications-list').html('<div class="notifications-status"><i class="fa fa-spinner fa-pulse"></i> Loading</div>');

            axios.post('{{ route('notifications.index') }}')
		        .then(function (response) {

			    $('#notifications .dropdown-menu .notifications-list').html('');

                if (Object.keys(response.data).length == 0) {
                    $('#notifications .dropdown-menu .notifications-list').html('<div class="notifications-status"><i class="fa fa-bell-o" aria-hidden="true"></i> Up to date</div>');
                }

                var notificationTemplate = $('#notification-template').html();

                $.each(response.data, function(i, item) {

                    var notification = $(notificationTemplate).clone();

                    $(notification).find('.notification-title').html(item.data.message);
                    $(notification).find('.timestamp').html(item.created_at);

                    $(notification).attr('notification-href', item.data.action);
                    $(notification).attr('notification-id', item.id);

                    if (item.read_at !== null) {
                        $(notification).addClass('read');
                    }

                    $('#notifications .dropdown-menu .notifications-list').append(notification);
                });

		    updateNotificatonsCount(Object.keys(response.data).length)

		    })
		    .catch(function (error) {
		        console.log(error);
		        $('#notifications .dropdown-menu .notifications-list').html('<div class="notifications-status text-danger">{{ Lang::get('messages.notifications.status.error') }}</div>');
		    });
        });

        $('#notifications .dropdown-menu .notifications-list').on('click', '.notification .notification-meta a[data-action]', function(e) {

            e.preventDefault;
            e.stopPropagation;

            var $notification = $(this).closest(".notification")

            if ($(this).data('action') == "set-read") {

                axios.post('{{ route('notifications.markRead') }}', {
                        notification: $notification.attr('notification-id')
                    })
                    .then(function (response) {
                        updateNotificatonsCountTick(-1)
                        $('.notification[notification-id="' + $notification.attr('notification-id') + '"]').addClass('read');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }

            return false;
        });

    </script>
    <script id="notification-template" type="text/notification-template">
    <li class="notification">
		<div class="media">

			<div class="media-left">
				<div class="media-object">
					<i class="fa" aria-hidden="true"></i>
	 			</div>
			</div>

			<div class="media-body">
				<p class="notification-title">message</p>
				<p class="notification-desc"></p>

				<div class="notification-meta">
					<small><span class="timestamp">time</span> - <a data-action="set-read" href="#">Mark as Read</a></small>
				</div>

			</div>
		</div>
	</li>
	</script>
</body>

</html>
