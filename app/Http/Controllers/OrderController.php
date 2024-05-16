<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Client;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::select('clients.name', 'clients.document', 'orders.id', 'orders.total', 'orders.date_order', 'orders.status')
            ->join('clients', 'orders.client_id', '=', 'clients.id')
            ->get();


        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $products = Product::all();
        return view('orders.create', compact('clients', "products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $order = Order::create([
            'date_order' => Carbon::now()->toDateTimeString(),
            'total' => $request->total,
            'route' => "Por hacer",
            'client_id' => Client::find($request->client)->id,
        ]);

        $order->status = 1;
        $order->registered_by = $request->registered_by;

        $order->save();

        return redirect()->route("orders.index")->with("success", "The orders has been created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        $client = Client::where("id", $order->client_id)->first();
        $details = OrderDetail::with('product')
            ->where('order_details.order_id', '=', $id)
            ->get();

        return view("orders.show", compact("order", "client", "details"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route("orders.index")->with("success", "The order has been deleted.");
    }

    public function changeorderurl(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->save();
    }
}
