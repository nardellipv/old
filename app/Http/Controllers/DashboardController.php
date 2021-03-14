<?php

namespace App\Http\Controllers;

use App\Point;
use App\User;
use DB;
use Charts;

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


            // dd(date('Y'));
        return view('admin.indexAdmin', compact('users', 'sells', 'sells_total', 'chart_totalSell','chart_lastMonthSell'));
    }
}
