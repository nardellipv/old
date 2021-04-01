<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Point;
use App\Product;
use App\Sale;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $users = User::where('type', 'Client')
            ->get();

        $sells = Sale::with(['product'])
            ->select("*", DB::raw("count(*) as product_count"))
            ->whereMonth('created_at', date('m'))
            ->groupBy('product_id')
            ->get();

        $sells_total = Sale::with(['product'])
            ->select("*", DB::raw("count(*) as product_count"))
            ->groupBy('product_id')
            ->paginate(10);

        $user_count = User::where('type', 'Client')
            ->count();

        $month_sell = Sale::whereMonth('created_at', date('m'))
            ->sum('price');

        $year_sell = Sale::sum('price');

        $products = Product::all();

        return view('admin.indexAdmin', compact(
            'users',
            'sells',
            'sells_total',
            'user_count',
            'month_sell',
            'year_sell',
            'products'
        ));
    }

    public function clientDashboard()
    {
        $products = Product::all();

        $user = Auth::user();

        $notifications = Notification::where('date', '>=', now())
            ->get();


        $pointClient = Point::where('user_id', $user->id)
            ->first();

        $product_exchanges = Point::with(['product'])
            ->where('user_id', $user->id)
            ->where('exchange', 'No')
            ->get();

        return view('adminClient.indexAdmin', compact('products', 'user', 'product_exchanges', 'pointClient', 'notifications'));
    }

    public function clientExchange($id)
    {
        $product = Product::find($id);

        $client = User::where('id', Auth::user()->id)
            ->first();

        $code = rand('100', '999');

        if ($client->total_points < $product->point_changed) {

            toastr()->error('No tienes puntos suficientes para este producto', 'Servicio No Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
            return back();
        } else {

            $client->total_points -= $product->point_changed;
            $client->save();

            $point = Point::create([
                'user_id' => $client->id,
                'product_id' => $product['id'],
                'point' => $product->point_changed,
                'code' => $client->id . $code,
            ]);


            Mail::send('emails.sendCode', ['client' => $client, 'code' => $code, 'product' => $product], function ($msj) use ($client, $product, $code) {
                $msj->from('no-responder@oldbarberchair.com.ar', 'Old Barber Chair');
                $msj->subject('Canje de puntos por productos o servicios');
                $msj->to($client->email, $client->name);
            });
        }

        toastr()->success('Servicio Canjeado Correctamente', 'Servicio Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }
}
