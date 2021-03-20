<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function listNotification()
    {
        $notifications = Notification::orderBy('date')
            ->get();

        return view('admin.notification.notification', compact('notifications'));
    }

    public function deleteNotification($id)
    {
        $notification = Notification::find($id);
        $notification->delete();

        toastr()->success('Notificación Borrada Correctamente', 'Notificación Borrada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function createNotification(Request $request)
    {
        Notification::create([
            'text' => $request['text'],
            'date' => $request['date'],
        ]);

        toastr()->success('Notificación Creada Correctamente', 'Notificación Creada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }
}
