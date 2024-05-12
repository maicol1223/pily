<?php

namespace App\Http\Controllers;

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
        $orders = Order::select('clients.name', 'clients.document', 'orders.id', 'orders.total', 'orders.date_order')
            ->join('clients', 'orders.client_id', '=', 'clients.id')
            ->get();
        $order_details = Order::select('order_details')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->get();

        return view('orders.index', compact('orders', 'order_details'));
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
    public function store(Request $request)
    {
        $order = Order::create([
            'date_order' => Carbon::now()->toDateTimeString(),
            'total' => 0,
            'route' => "Por hacer",
            'client_id' => Client::find($request->client)->id,
        ]);

        $order->status = 1;
        $order->registered_by = $request->registered_by;

        $rawProductId = $request->product_id;
        $rawQuantity = $request->quantity;
        for ($i = 0; $i < count($rawProductId); $i++) {
            $product = Product::find($rawProductId[$i]);
            $quantity = $rawQuantity[$i];

            $order->order_details()->create([
                'quantity' => $quantity,
                'subtotal' => $product->price * $quantity,
                'product_id' => $product->id,
            ]);
        }

        $order->save();

        return redirect()->route("orders.index")->with("success", "The orders has been created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
