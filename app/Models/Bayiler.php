<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayiler extends Model
{
    protected $guarded = [];
    use HasFactory;

    // Bayi modeli içinde
public function il()
{
    return $this->belongsTo(Iller::class, 'il_id');
}

}
