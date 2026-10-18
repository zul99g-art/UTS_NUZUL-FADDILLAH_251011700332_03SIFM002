<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $table = 'instruments';

    protected $fillable = [
        'name', 'brand', 'price', 'description', 'image', 'type',
    ];

    // URL gambar dari folder public/assets/images/
    public function getImageUrlAttribute(): string
    {
        return asset('assets/images/' . $this->image);
    }

    // 1850000 -> "Rp 1.850.000"
    public function getPriceRupiahAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
