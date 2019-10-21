<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class NotificationsController extends Controller {

	// Return all user notifications
    public function index() 
    {
		$user = Auth::user();
		
		return view('users.notifications', [
            'user' => $user,
            'notifications' => $user->notifications()->paginate(20),
		]);
	}
	
	// Return all unread user notifications
    public function unread() 
    {
		$user = Auth::user();
		
		return $user->unreadNotifications;
	}
	

	// Read user notifications
    public function readAll() 
    {
		$user = Auth::user();
		
        DB::beginTransaction();
        
		try {
			$user->unreadNotifications()->update(['read_at' => Carbon::now()]);
		} catch (Exception $e) {
			DB::rollback();
			return response()->json($e, 500);
		}
		
		DB::commit();
		
		return response('success', 200);
	}
    
    // Mark all notifications as read
    public function markRead(Request $request) 
    {
		$user = Auth::user();
		
		DB::beginTransaction();
		try {
				
			$notification = $user->notifications()->where('id', $request->input('notification'))->first();
			$notification->markAsRead();
			
		} catch (Exception $e) {
				
			DB::rollback();
			return response()->json($e, 500);
				
		}
		
		DB::commit();
		
		return response('success', 200);
	}
}
