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
}
