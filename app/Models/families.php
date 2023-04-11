<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class families extends Model
{
    use HasFactory;
    protected $table = 'families';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'nama',
        'status_keluarga',
        'pekerjaan',
        'alamat'
    ];
}
