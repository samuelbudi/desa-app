<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UmkmImage extends Model
{
    protected $fillable = ['umkm_id', 'path'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}
