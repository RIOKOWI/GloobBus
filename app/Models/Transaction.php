<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    //
    use HasFactory;

    protected $table = 'transactions_tabel';
    protected $fillable = [
        'bus_id',
        'customer_id',
        'jumlah_tiket',
        'tipe_sewa',
        'total',
        'tanggal_transaksi'

    ];
    // Relasi ke model Bus
    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }

    // Relasi ke model Customer
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
