<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeTicket;

class TiketController extends Controller
{
    public function index()
    {
        $tickets = TipeTicket::all();
        return view('tiket.index', compact('tickets'));
    }

     public function output(Request $request)
    {
        $tipe = $request->input('tipe');
        $jumlah = $request->input('jumlah');

        $ticket = TipeTicket::where('tipe', $tipe)->first();
        $total = $ticket->harga * $jumlah;

        return view('tiket.output', compact('ticket', 'jumlah', 'total'));
    }
}
