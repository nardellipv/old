<?php

namespace App\Http\Controllers;

use App\Point;
use Carbon\Carbon;
use DB;

class ExchangeController extends Controller
{
    public function listExchange()
    {
        $exchanges = Point::with(['product'])
            ->select(
                DB::raw('id as `id`'),
                DB::raw('count(id) as `data`'),
                DB::raw("DATE_FORMAT(created_at, '%d-%m-%Y') new_date"),
                DB::raw('YEAR(created_at) year, MONTH(created_at) month'),
                DB::raw("SUM(point) as point")
            )
            ->where('exchange', 'Si')
            ->groupBy(DB::raw("month(created_at)"))
            ->groupBy(DB::raw("year(created_at)"))
            ->orderBy('created_at', 'DESC')
            ->paginate(12);


        return view('admin.exchange.listExchange', compact('exchanges'));
    }

    public function detailExchange($month, $year)
    {
        $sales_month = Point::with(['user', 'product'])
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->orderBy('created_at', 'DESC')
            ->get();

        $month_name = Carbon::createFromFormat('m', $month);

        return view('admin.exchange.detailExchange', compact('sales_month', 'month_name'));
    }

    public function accumulatedExchange()
    {
        $exchanges = Point::with(['product', 'user'])
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('admin.exchange.accumulatedExchange', compact('exchanges'));
    }
}
