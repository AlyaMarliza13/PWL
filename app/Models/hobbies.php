<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hobbies extends Model
{
    use HasFactory;
    protected $table = 'hobbies';
    //protected $primaryKey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'hobi',
        'kategori',
    ];
}
