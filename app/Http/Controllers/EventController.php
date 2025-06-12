<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    // Menyimpan data event baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        Event::create($request->all());
        return redirect()->route('events.index')->with('success', 'Event berhasil ditambahkan!');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    // Update data event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        $event->update($request->all());
        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui!');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus!');
    }
}
