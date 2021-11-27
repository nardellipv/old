<?php

namespace App\Http\Controllers;

use App\SenderMail;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function birthday()
    {
        $emailSend = SenderMail::where('id', 2)
            ->first();

        if ($emailSend->active == 'Y') {
            $users = User::whereDay('birthday', now())
                ->whereMonth('birthday', now())
                ->get();

            foreach ($users as $user) {
                Mail::send('emails.birthday', ['user' => $user], function ($msj) use ($user) {
                    $msj->from('no-responder@oldbarberchair.com.ar', 'Old Barber Chair');
                    $msj->subject('Regalo de cumpleaños');
                    $msj->to($user->email, $user->name);
                });
            }
        }
    }
}
