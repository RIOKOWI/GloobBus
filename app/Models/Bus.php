<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
    use HasFactory;

    protected $table = 'buses_tabel';
    protected $fillable = [
        'kode',
        'nama',
        'tujuan',
        'harga',
        'jenis',
        'jadwal_keberangkatan',
        'supir'

    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
