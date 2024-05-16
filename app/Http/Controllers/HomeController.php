<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCount = Product::where('status', '=', '1')->count();
        $clientCount = Client::where('status', '=', '1')->count();

        $date = Carbon::now()->format('Y-m-d');

        $orderDayCount = Order::whereDate('date_order', '=', $date)->get()->count();
        $orderDayTotal = Order::whereDate('date_order', '=', $date)->get()->sum("total");

        $orderMonthCount = Order::whereMonth('date_order', date('m'))->get()->count();
        $orderMonthTotal = Order::whereMonth('date_order', date('m'))->get()->sum("total");

        return view(
            'home',
            compact(
                'productCount',
                'clientCount',
                'orderDayCount',
                'orderDayTotal',
                'orderMonthCount',
                'orderMonthTotal'
            ),
        );
    }
}
