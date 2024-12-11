<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    //
    use HasFactory;

    protected $table = 'customers_tabel';
    protected $fillable = [
        'nama',
        'alamat',
        'phone'

    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
