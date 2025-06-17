<?php

namespace Database\Seeders;

use App\Models\TipeTicket;
use Illuminate\Database\Seeder;

class TipeTicketSeeder extends Seeder
{
    public function run(): void
    {
        TipeTicket::create([
        'tipe' => 'VIP',
        'harga' => 1000000,
        'deskripsi' => '5 baris paling depan, akan mendapat souvenir dengan tanda tangan artis',
        ]);

        TipeTicket::create([
        'tipe' => 'Economy',
        'harga' => 500000,
        'deskripsi' => 'Seat belakang VIP, mendapat souvenir',
        ]);
        
    }
}
