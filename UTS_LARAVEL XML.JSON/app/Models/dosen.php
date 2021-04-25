<?php

namespace App\Models;
use App\Models\matakuliah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $fillable = [
        'NIP',
        'Name',
        'sks',
        'Address',
        'matakuliah_id',
    ];

    public function matakuliah()
    {

        return $this->belongsTo(matakuliah::class);

    }

}
