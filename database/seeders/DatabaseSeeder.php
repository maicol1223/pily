<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Product::factory(20)->create();
        Client::factory(20)->create();

        $orders = Order::factory(50)
            ->has(OrderDetail::factory()->count(5))
            ->create();
            foreach ($orders as $order) {
                $order->generatePDF();
            
    }
}

}
