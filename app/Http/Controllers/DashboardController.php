<?php

namespace App\Http\Controllers;

use App\Point;
use App\Product;
use App\User;
use DB;
use Charts;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::all();

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

        return view('admin.indexAdmin', compact('users', 'sells', 'sells_total', 'chart_totalSell', 'chart_lastMonthSell'));
    }

    public function clientDashboard()
    {
        $products = Product::all();
        $user = Auth::user();

        $product_exchanges = Point::with(['product'])
            ->where('user_id', $user->id)
            ->where('exchange', 'No')
            ->get();

        return view('adminClient.indexAdmin', compact('products', 'user', 'product_exchanges'));
    }
}
