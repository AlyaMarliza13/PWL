<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'nama_mata_kuliah',
        'dosen_pengampu',
        'jumlah_sks',
        'semester',
    ];
}
