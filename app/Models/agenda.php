<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;

    protected $fillable = ['namaguru', 'mapel', 'materipel', 'kelas', 'absen', 'jampel', 'linkpem', 'dokumentasi', 'keterangan', 'jenispem'];
}
