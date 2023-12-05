<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pembuat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function produk() :BelongsTo
    {
        return $this->belongsTo(produk::class);
    }

    public function penjualan(): HasOne
    {
        return $this->hasOne(penjualan::class);
    }
}
