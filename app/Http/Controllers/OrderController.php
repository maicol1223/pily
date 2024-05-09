<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::select('clients.name', 'clients.document', 'orders.order_detail_id', 'orders.id', 'orders.total')
            ->join('clients', 'orders.client_id', '=', 'clients.id')
            ->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::where('status', '=', '1')->orderBy('total')->get();
        return view('orders.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $idOrder = $order->id;

        $i = 0;
        while ($i < count($request->item)) {
            $orderDetail = new OrderDetail();
            $order->order_id = $idOrder;
            $orderDetail->save();
        }

        $order->client_id = $request->client_id;
        $order->save();
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
