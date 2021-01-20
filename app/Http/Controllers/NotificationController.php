<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NotificationController extends Controller
{
    public function list()
    {
        $notifications = auth()->user()->notifications;
        return Inertia::render('Notification/List', ['notifications'=>$notifications]);
    }
    public function markRead(Notification $notification)
    {
        if($notification->user_id == auth()->user()->id)
        {
            $notification->read_at = now();
            $notification->save();
        }
        else
        {
            abort(401);
        }
    }
    public function destroy(Notification $notification)
    {
        if($notification->user_id == auth()->user()->id)
        {
            $notification->delete();
        }
        else
        {
            abort(401);
        }
    }
}
