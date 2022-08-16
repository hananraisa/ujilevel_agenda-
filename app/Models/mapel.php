<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;

    protected $fillable = ['mapel'];
    public function mapelguru(){
        return $this->hasMany(guru::class);
    }
}
