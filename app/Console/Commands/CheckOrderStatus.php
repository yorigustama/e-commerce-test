<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Order;

class CheckOrderStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * 
     */
    protected $signature = 'orders:check-status';

    /**
     * The console command description.
     *
     * 
     */
    protected $description = 'Check order status and mark expired if not processed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * 
     */
    public function handle()
    {
        $orders = Order::where('status', 'waiting')->get();

        foreach ($orders as $order) {
            $orderDate = Carbon::parse($order->tanggal_pemesanan);
            $expirationDate = $orderDate->addHours(24); // Ubah sesuai dengan waktu yang diinginkan

            if (Carbon::now() >= $expirationDate) {
                $order->status = 'expired';
                $order->save();
            }
    }
    $this->info('Order status checked and expired orders marked.');
    }

  
}
