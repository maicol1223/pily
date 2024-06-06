<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $dates = [
        'date_order',
    ];

    protected $fillable = [
        'date_order',
        'total',
        'route',
        'status',
        "registered_by",
        'client_id',
    ];

    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function generatePDF()
    {
        $client = Client::find($this->client_id);
        $details = OrderDetail::with('product')
            ->where('order_details.order_id', '=', $this->id)
            ->get();

        $pdfName = 'uploads/bills/bill_' . $this->id . '_' . Carbon::now()->format('YmdHis') . '.pdf';
        $pdf = PDF::loadView('orders.bill', ['order' => $this, 'client' => $client, 'details' => $details])
            ->setPaper('letter')
            ->output();

        file_put_contents(public_path($pdfName), $pdf);

        $this->route = $pdfName;
        $this->save();
    }
}
