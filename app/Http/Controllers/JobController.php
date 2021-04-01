<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function birthday()
    {
        $users = User::whereDay('birthday', Carbon::now()->subDays(7))
            ->get();

        foreach ($users as $user) {
            Mail::send('emails.birthday', ['user' => $user], function ($msj) use ($user) {
                $msj->from('no-responder@oldbarberchair.com.ar', 'Old Barber Chair');
                $msj->subject('Feliz cumple puto');
                $msj->to($user->email, $user->name);
            });
        }
    }
}
