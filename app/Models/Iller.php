<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iller extends Model
{
    protected $guarded = [];
    use HasFactory;


    public function bayi()
    {

        return $this->hasMany(Iller::class);
    }
}
