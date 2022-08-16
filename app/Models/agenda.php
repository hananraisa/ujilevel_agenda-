<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;

    protected $fillable = ['guru_id', 'materipel', 'kelas_id', 'absen', 'jampel', 'linkpem', 'dokumentasi', 'keterangan', 'jenispem'];
    public $timestamps = false;
    
    public function agendaguru(){
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    public function agendakelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
