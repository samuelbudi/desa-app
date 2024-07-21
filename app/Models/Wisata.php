<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $fillable = ['nama', 'desc', 'cp'];

    public function images()
    {
        return $this->hasMany(WisataImage::class, 'wisata_id');
    }
}
