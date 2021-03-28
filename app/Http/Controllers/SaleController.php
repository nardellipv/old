<?php

namespace App\Http\Controllers;

use App\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class SaleController extends Controller
{
    public function saleList()
    {
        $sales = Sale::with(['product'])
            ->select(
                DB::raw('id as `id`'),
                DB::raw('count(id) as `data`'),
                DB::raw("DATE_FORMAT(created_at, '%d-%m-%Y') new_date"),
                DB::raw('YEAR(created_at) year, MONTH(created_at) month'),
                DB::raw("SUM(price) as price")
            )
            ->groupBy(DB::raw("month(created_at)"))
            ->groupBy(DB::raw("year(created_at)"))
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        return view('admin.sale.listSale', compact('sales'));
    }

    public function saleDetail($month, $year)
    {
        $sales_month = Sale::with(['user', 'product'])
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->orderBy('created_at', 'DESC')
            ->get();

        $total_month = Sale::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->sum('price');
            
        $month_name = Carbon::createFromFormat('m', $month);
        
        return view('admin.sale.detail', compact('sales_month', 'total_month', 'month_name'));
    }
}
