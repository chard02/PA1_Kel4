<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Komentar;

class bahanbangunan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'harga', 'stok'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function komentar()
    {
        return $this->morphMany(Komentar::class, 'komentarable');
    }
}
