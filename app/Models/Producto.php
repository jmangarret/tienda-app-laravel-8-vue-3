<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = [];
    /*
    * Get the user that owns the phone.
    */
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
