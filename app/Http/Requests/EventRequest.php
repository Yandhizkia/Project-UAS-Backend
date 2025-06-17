<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // true kalau tanpa pengecekan role/login dan user harus dipatikan diizinkan
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric|min:0',
        ];
    }
}