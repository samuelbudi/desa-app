<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';

    protected $fillable = [
        'nama', 'desc', 'cp',
    ];
    public function images()
    {
        return $this->hasMany(UmkmImage::class, 'umkm_id');
    }
}
