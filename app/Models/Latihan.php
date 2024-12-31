<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class latihan extends Model
{
    protected $fillable = ['jenis', 'deskripsi', 'gambar', 'set'];
    protected $table = 'latihan';
    public $timestamps = false;
}
