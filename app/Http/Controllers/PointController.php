<?php

namespace App\Http\Controllers;

use App\Point;
use App\Product;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PointController extends Controller
{
    public function updateService(Request $request, $id)
    {
        $user = User::find($id);

        for ($i = 0; $i < count($request['service']); $i++) {
            $product = Product::where('id', $request->service[$i])
                ->first();

            $total_point = $product->point;
            $user->total_points = $user->total_points + $total_point;
            $user->save();

            Point::create([
                'user_id' => $id,
                'product_id' => $product['id'],
                'point' => $product->point,
            ]);
        }

        toastr()->success('Servicio al Cliente Cargado Correctamente', 'Servicio Cargado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function exchenge(Request $request, $id)
    {
        // dd($request->all());
        $totalService = array_sum($request->point);
        
        $client = User::find($id);
        $client->total_points = $client->total_points - $totalService;
        $client->save();


        Mail::send('emails.exchangePoints', ['client' => $client, 'totalService' => $totalService], function ($msj) use($client, $totalService) {
            $msj->from('no-responder@oldbarberchair.com.ar', 'Old Barber Chair');
            $msj->subject('Canje de puntos');
            $msj->to($client->email, $client->name);
        });


        toastr()->success('Servicio Canjeado al cliente Correctamente', 'Servicio Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }
}
