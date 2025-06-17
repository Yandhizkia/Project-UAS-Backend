<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeTicket extends Model
{
    protected $fillable = ['tipe', 'harga', 'deskripsi'];
}
