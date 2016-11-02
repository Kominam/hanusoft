<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class NotificationController extends Controller
{
     public function delete(Request $request) {
        $user = Auth::user();
        $notification = $user->notifications()->where('id',$request->noti_id)->first();
        if ($notification)
        {
            $notification->markAsRead();
            return 'ok';
        }
        else
            return 'error';
    }
    public function getAllMessageNoti() {
            $user = Auth::user();
            $all_mess_noti = $user->notifications()->where('notifiable_id',$user->id)->where('type','App\Notifications\ChatProject')->paginate(10);
         return view('backend.pages.all_message_noti',['all_mess_noti' => $all_mess_noti]);
    }
    public function markRead($notification_id) {
         $user = Auth::user();
        $notification = $user->notifications()->where('id',$notification_id)->first();
        if ($notification)
        {
            $notification->markAsRead();
            return back();
        }
    }
}
