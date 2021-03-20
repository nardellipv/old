<?php

namespace App\Http\Controllers;

use App\Point;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    /*   public function exchenge(Request $request, $id)
    {
        $totalService = array_sum($request->point);

        $client = User::find($id);
        $client->total_points = $client->total_points - $totalService;
        $client->save();

        Mail::send('emails.exchangePoints', ['client' => $client, 'totalService' => $totalService, 'qr' => $qr], function ($msj) use ($client, $qr, $totalService) {
            $msj->from('no-responder@oldbarberchair.com.ar', 'Old Barber Chair');
            $msj->subject('Canje de puntos');
            $msj->to($client->email, $client->name);
        });


        toastr()->success('Servicio Canjeado al cliente Correctamente', 'Servicio Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    } */

    public function clientShowExchange($id)
    {
        $product = Product::find($id);

        $client = User::where('id', Auth::user()->id)
            ->first();

        $qr = QrCode::size(300)
            ->generate('Valido por ' . $product->name);


        return view('adminClient.exchange.exchange', compact('product', 'client', 'qr'));
    }

    public function showChangeQr($id)
    {
        $point = Point::find($id);

        $product = Product::where('id', $point->product_id)
            ->first();

        return view('admin.qr.showQr', compact('point', 'product'));
    }

    public function ChangeQr($id)
    {
        $point = Point::find($id);

        $point->exchange = 'Si';
        $point->date_exchange = now();
        $point->save();

        toastr()->success('Producto Canjeado Correctamente', 'Producto Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function clientExchange($id)
    {
        /*        $product = Product::find($id);

        $client = User::where('id', Auth::user()->id)
            ->first();

        if ($client->total_points < $product->point) {
            toastr()->error('No tienes puntos suficientes para este producto', 'Servicio No Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
            return back();
        } else {
            $client->total_points -= $product->point;
            $client->save();

            Point::create([
                'user_id' => $client->id,
                'product_id' => $product['id'],
                'point' => $product->point,
            ]);
        }


        toastr()->success('Servicio Canjeado Correctamente', 'Servicio Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back(); */
    }
}
