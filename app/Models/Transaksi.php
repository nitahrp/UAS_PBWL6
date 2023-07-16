<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    protected $table ="tb_transaksi";
    protected $primaryKey ='tran_id';
    protected $guarded =[];

    public function Bus():BelongsTo
    {
        return $this->belongsTo(Bus::class, 'pel_id_bus', 'bus_id');
    }

    public function Penumpang():BelongsTo
    {
        return $this->belongsTo(Penumpang::class, 'pel_id_pen', 'pen_id');
    }
}
