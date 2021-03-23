<?php

namespace App\Http\Controllers;

use App\Point;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function listExchange()
    {
        $list_exchange = Point::with(['product'])
            ->where('user_id', Auth::user()->id)
            ->get();

        return view('adminClient.exchange.list', compact('list_exchange'));
    }

    public function exchenge(Request $request, $id)    
    {
        $client = User::find($id);

        $client->total_points -= $request['points'];
        $client->save();

        toastr()->success('Producto Canjeado Correctamente', 'Producto Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function clientExchange($id)
    {
/*         $product = Product::find($id);
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
