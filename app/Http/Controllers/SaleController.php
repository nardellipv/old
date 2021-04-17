<?php

namespace App\Http\Controllers;

use App\Product;
use App\Sale;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Charts;

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


        $chart_totalSell = Charts::database(Sale::get(), 'bar', 'highcharts')
            ->setTitle('Ventas Acumuladas')
            ->setDateColumn('created_at')
            ->setElementLabel("Cantidad de ventas")
            ->setResponsive(true)
            ->groupByMonth(date('Y'), true);

        $chart_lastMonthSell = Charts::database(Sale::all(), 'bar', 'highcharts')
            ->setTitle('Ventas del Mes')
            ->setDateColumn('created_at')
            ->setElementLabel("Cantidad de ventas")
            ->setResponsive(true)
            ->groupByDay();

        $month_sell = Sale::whereMonth('created_at', date('m'))
            ->sum('price');

        $year_sell = Sale::sum('price');

        return view('admin.sale.listSale', compact('sales', 'chart_totalSell', 'chart_lastMonthSell', 'month_sell', 'year_sell'));
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

    public function saleAdd()
    {
        $clients = User::all();

        $products = Product::all();

        return view('admin.sale.addSale', compact('clients', 'products'));
    }

    public function saleStore(Request $request)
    {
        $product = Product::where('id', $request['product_id'])
            ->first();

        Sale::create([
            'user_id' => $request['user_id'],
            'product_id' => $product->id,
            'price' => $product->price,
            'created_at' => $request['created_at'],
        ]);

        toastr()->success('Venta Cargada Correctamente', 'Venta Cargada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function saleShow($id)
    {
        $sale = Sale::find($id);

        $clients = User::all();

        $products = Product::all();

        return view('admin.sale.editSale', compact('sale', 'clients', 'products'));
    }

    public function saleUpdate(Request $request, $id)
    {
        $product = Product::where('id', $request['product_id'])
            ->first();

        $sale = Sale::find($id);
        $sale->user_id = $request['user_id'];
        $sale->product_id = $product->id;
        $sale->price = $product->price;
        if ($request['created_at']) {
            $sale->created_at = $request['created_at'];
        }
        $sale->save();

        toastr()->success('Venta Modificada Correctamente', 'Venta Modificada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function saleDelete($id)
    {
        $sale = Sale::find($id);
        $sale->delete();

        toastr()->success('Venta Eliminada Correctamente', 'Venta Eliminada', ["positionClass" => "toast-bottom-left", "timeOut" => "3000", "progressBar" => "true"]);
        return back();
    }

    public function saleAccumulated()
    {
        $sales = Sale::with(['product', 'user'])
            ->orderBy('created_at', 'DESC')
            ->get();

        $total_month = Sale::sum('price');

        return view('admin.sale.accumulated', compact('sales','total_month'));
    }
}
