<?php

namespace App\Models;

use App\Models\dosen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $fillable = [
        'nama_mk',
        'sks',
    ];

    public function dosen()
    {
        return $this->hasMany(dosen::class);
    }
}
