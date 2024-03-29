<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = ['number'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
