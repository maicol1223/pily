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
        $orders = Order::select('clients.name', 'clients.document', 'orders.id', 'orders.total', 'orders.date_order', 'order_details')
            ->join('clients', 'orders.client_id', '=', 'clients.id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('orders.create', compact('clients'));
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

        $order->status = $request->status;
        $order->registered_by = $request->registered_by;

        $rawOrderDetail = $request->order_detail;
        for ($i = 0; $i < count($rawOrderDetail); $i++) {
            $order->order_details()->create([
                'quantity' => 0,
                'subtotal' => 0,
                'product_id' => Product::find(1)->id, // TODO: Remove hardcode.
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
    public function destroy(string $id)
    {
        //
    }
}
