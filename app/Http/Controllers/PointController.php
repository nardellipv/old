<?php

namespace App\Http\Controllers;

use App\Point;
use App\Product;
use App\Sale;
use App\User;
use DB;
use Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            $code = rand('100', '999');

            Point::create([
                'user_id' => $id,
                'product_id' => $product['id'],
                'point' => $product->point,
                'code' => $user->id . $code,
            ]);

            Sale::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'price' => $product->price,
            ]);
        }

        toastr()->success('Servicio al Cliente Cargado Correctamente', 'Servicio Cargado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
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

    public function exchengeShowCode(Request $request)
    {
        $code = Point::where('code', $request['code'])
            ->first();

        if (!$code) {
            toastr()->success('El código no existe', 'Código Erroneo', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
            return back();
        }


        return view('admin.code.showCodeProduct', compact('code'));
    }

    public function exchengeCode($code)
    {
        $codeChange = Point::where('code', $code)
            ->first();

        $codeChange->exchange = 'Si';
        $codeChange->date_exchange = now();
        $codeChange->save();

        $users = User::where('type', 'Client')
            ->get();


        Mail::send('emails.exchangePoints', ['codeChange' => $codeChange], function ($msj) use ($codeChange) {
            $msj->from('no-responder@oldbarberchair.com.ar', 'Old Barber Chair');
            $msj->subject('canje de puntos');
            $msj->to($codeChange->user->email, $codeChange->user->name);
        });


        $sells = Point::with(['product'])
            ->select("*", DB::raw("count(*) as product_count"))
            ->whereMonth('created_at', date('m'))
            ->groupBy('product_id')
            ->get();

        $sells_total = Point::with(['product'])
            ->select("*", DB::raw("count(*) as product_count"))
            ->groupBy('product_id')
            ->paginate(10);

        $chart_totalSell = Charts::database(Point::all(), 'bar', 'highcharts')
            ->setTitle('Ventas Acumuladas')
            ->setDateColumn('created_at')
            ->setElementLabel("Cantidad de ventas")
            ->setResponsive(true)
            ->groupByMonth(date('Y'), true);

        $chart_lastMonthSell = Charts::database(Point::all(), 'bar', 'highcharts')
            ->setTitle('Ventas del Mes')
            ->setDateColumn('created_at')
            ->setElementLabel("Cantidad de ventas")
            ->setResponsive(true)
            ->groupByDay();

        $user_count = User::where('type', 'Client')
            ->count();

        $month_sell = Point::join('products', 'products.id', 'points.product_id')
            ->whereMonth('points.created_at', now('m'))
            ->sum('products.price');

        $year_sell = Point::join('products', 'products.id', 'points.product_id')
            ->whereYear('points.created_at', now('Y'))
            ->sum('products.price');

        $products = Product::all();

        toastr()->success('Producto Canjeado Correctamente', 'Producto Canjeado', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return view('admin.indexAdmin', compact(
            'users',
            'sells',
            'sells_total',
            'chart_totalSell',
            'chart_lastMonthSell',
            'user_count',
            'month_sell',
            'year_sell',
            'products'
        ));
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
