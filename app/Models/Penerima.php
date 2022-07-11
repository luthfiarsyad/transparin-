<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function wargas()
    {
        return $this->hasMany(Warga::class);
    }
}
